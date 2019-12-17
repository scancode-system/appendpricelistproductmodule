<?php

namespace Modules\AppendPriceListProduct\Services;


class AppendPriceListProductService {
	
	public function fields(){
		return config('appendpricelistproduct.fields');
	}

	public function sample(){
		return config('appendpricelistproduct.sample');
	}

}
