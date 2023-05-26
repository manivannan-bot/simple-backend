<!DOCTYPE html>
<html lang="en-US">
   @include('website.layout.header')
   <body class="page-template page-template-elementor_header_footer page page-id-5122 wp-custom-logo wp-embed-responsive theme-alone woocommerce-no-js tribe-no-js singular has-mini-items shop-bages elementor-default elementor-template-full-width elementor-kit-9 elementor-page elementor-page-5122">
     
      <div data-elementor-type="wp-page" data-elementor-id="5122" class="elementor elementor-5122">
         <div class="elementor-inner">
            <div class="elementor-section-wrap">
			 <section class="elementor-section elementor-top-section elementor-element elementor-element-402ea38 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="402ea38" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-container elementor-column-gap-extended">
				   <div class="elementor-row">
					  <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e488afc" data-id="e488afc" data-element_type="column">
						 <div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
							   <div class="elementor-element elementor-element-a97daa1 elementor-invisible elementor-widget elementor-widget-heading" data-id="a97daa1" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
								  <div class="elementor-widget-container">
									 <h2 class="elementor-heading-title elementor-size-default">Events</h2>
								  </div>
							   </div>
							   <div class="elementor-element elementor-element-e385ba3 elementor-view-default elementor-invisible elementor-widget elementor-widget-icon" data-id="e385ba3" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="icon.default">
								  <div class="elementor-widget-container">
									 <div class="elementor-icon-wrapper">
										<div class="elementor-icon">
										</div>
									 </div>
								  </div>
							   </div>
							   <div class="elementor-element elementor-element-2e43c63 elementor-grid-3 elementor-grid-tablet-2 elementor-grid-mobile-1 elementor-invisible elementor-widget elementor-widget-be-give-forms" data-id="2e43c63" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}" data-widget_type="be-give-forms.skin-grid-hardeol">
								  <div class="elementor-widget-container">
									 <div class="elementor-grid elementor-give-forms--skin-grid-hardeol">
									   @foreach($reports as $key=>$val)	
											<article id="post-98" class="elementor-give-form has-thumbnail post-98 give_forms type-give_forms status-publish has-post-thumbnail give_forms_category-children give_forms_tag-chariry give_forms_tag-children give_forms_tag-support entry">
											<div class="give-card__category"><a href="" rel="tag">June to July 2023 </a></div>
											<div class="give-card__media">
												<img width="300" height="200" src="{{url($val->title)}}" class="attachment-medium size-medium wp-post-image" alt="" decoding="async" loading="lazy" srcset="{{url('website/asset/reports/thumb-2019.png')}} 300w, {{url('website/asset/reports/thumb-2019.png')}} 1024w, {{url('website/asset/reports/thumb-2019.png')}} 768w, {{url('website/asset/reports/thumb-2019.png')}} 600w, {{url('website/asset/reports/thumb-2019.png')}} 1200w" sizes="(max-width: 300px) 100vw, 300px">
												<div class="give-card__overlay"></div>
											</div>
											<div class="give-card__body">
												<h3 class="give-card__title">
													<a href="">{{$val->title}}
														</a>
												</h3>
													<a href="{{url('website/asset/reports/LIFE annual Report 19-20.pdf')}}" download>
														<button type="button" class="give-btn give-btn-modal">Download Brouchers</button>
													</a>                                                                                                    
											</div>
											</article>
										@endforeach
									 </div>
								  </div>
							   </div>
							</div>
						 </div>
					  </div>
				   </div>
				</div>
			 </section>
	    </div>
    </div>  
	
	 
    @include('website.layout.footer')
   </body>
</html>