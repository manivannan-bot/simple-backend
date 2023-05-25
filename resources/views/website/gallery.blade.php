<!DOCTYPE html>
<html lang="en-US">
    @include('website.layout.header')
    <body class="page-template page-template-elementor_header_footer page page-id-5122 wp-custom-logo wp-embed-responsive theme-alone woocommerce-no-js tribe-no-js singular has-mini-items shop-bages elementor-default elementor-template-full-width elementor-kit-9 elementor-page elementor-page-5122">
      
      <div data-elementor-type="wp-page" data-elementor-id="5122" class="elementor elementor-5122">
         <div class="elementor-inner">
            <div class="elementor-section-wrap">
				<section class="elementor-section elementor-top-section elementor-element elementor-element-402ea38 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="402ea38" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="intro">
					  @foreach($reports as $key=> $val)
						<div class="container">
							<div class="row">
								<div class="col">
								
									<img src="{{ url($val->banner) }}" style="width: 30%; height:30%;">
								
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</section>
			</div>
        </div>
      </div>
	 
      @include('website.layout.footer')
   </body>
</html>