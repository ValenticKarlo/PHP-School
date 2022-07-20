<?php

namespace ProductReporter;

use ZipArchive;

define( 'EntryName', 'products.csv');
define( 'CsvSeparator', ';');

class ProductReporter {

	function __construct( $filepath ) {
		$this->filepath = $filepath;
	}

	private function get_file_contents() {

		$contents = '';
		

		if ( ! file_exists( $this->filepath ) ) {
			throw new \Exception( 'File [' . $this->filepath . '] does not exist.' );
		}
		$zip = new ZipArchive;

		$fh = $zip->open( $this->filepath);

		if ( !$fh  ) {
			throw new \Exception( 'Could not open zip file [' . $this->filepath . '].' );
		}
		for($i=0; $i<$zip->numFiles ; $i++) {
			$__stat_index = $zip->statIndex( $i );
			if ( $zip->statIndex( $i )['name'] === EntryName ) {
				$contents = $zip->getFromName(EntryName);
	
			}
		}

		$zip->close(  );

		return $contents;
	}

	private function build_products( $contents ) {

		$products = [];

		$rows = str_getcsv( $contents, "\n" );

		foreach ( $rows as $row ) {
			$arr = str_getcsv( $row, CsvSeparator );
			$products[] = new Product( $arr[0], $arr[1], $arr[2], $arr[3] );
		}

		usort(
			$products,
			function($p1,$p2) {
				if ($p1->get_price() === $p2->get_price()) {
					return 1;
				}
				return $p1->get_price() > $p2->get_price() ? 1 : -1;
			}
		);

		return $products;
	}

	public function parse() {
		if ( ! property_exists( $this, 'products' ) ) {
			$contents = $this->get_file_contents();
			$this->products = $this->build_products( $contents );
		}
	}

	public function get_products() {
		if ( !property_exists( $this,'products'  ) ) {
			return [];
		} else {
			return $this->products;
		}
	}
}
