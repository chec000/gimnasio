<!-- Modal -->
<div class="modal closeable_modal" id="modalTerms" style="overflow-y: visible !important;">
	<div class="modal__inner ps-container">
		<header class="modal__head">
			<h5 class="modal__title">@lang('shopping::register.terms.title')</h5>
		</header>
		<div id="divToPrint" class="modal__body">
			<object id="obj" type="application/pdf" data="" width="100%" height="500" style="height: 85vh;">No Support</object>
		</div>
		<div class="buttons-container">
			<a id="downloadterms" class="button clean" href="" download>
				<figure class="icon icon-download"><img src="{{asset('themes/omnilife2018/images/icons/download.svg')}}" alt="OMNILIFE - download"></figure>@lang('shopping::register.terms.download')</a>
			<button class="button secondary close" type="button">@lang('shopping::register.terms.cancel')</button>
			<button  class="accept-terms button primary" type="button">@lang('shopping::register.terms.accept')</button>
		</div>

	</div>
</div>
<style>
	.modal{
		display: block !important; /* I added this to see the modal, you don't need this */
	}

	/* Important part */
	.modal-dialog{
		overflow-y: initial !important
	}
	.modal-body{
		height: 550px;
		overflow-y: visible !important;
	}
</style>
