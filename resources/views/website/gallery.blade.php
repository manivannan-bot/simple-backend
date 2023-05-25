<!DOCTYPE html>
<html lang="en-US">
    @include('website.layout.header')
    <body class="page-template page-template-elementor_header_footer page page-id-5122 wp-custom-logo wp-embed-responsive theme-alone woocommerce-no-js tribe-no-js singular has-mini-items shop-bages elementor-default elementor-template-full-width elementor-kit-9 elementor-page elementor-page-5122">
	             <div class="d-flex flex-wrap">
					  @foreach($reports as $key=> $val)
							
								<img src="{{ url($val->banner) }}" style="width: 20%; height: 30%" >
							
    
						@endforeach
				 </div>
					
      @include('website.layout.footer')
   </body>

</html>