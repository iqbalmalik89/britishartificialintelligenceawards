var mHeadingNormal = '';
var mHeadingPara   = '';
var mHeadingNormalTag = '';
var mHeadingParaTag   = '';

jQuery(document).ready(function($){

	mHeadingNormalTag = $('.mHeadingSep').find('.uvc-main-heading h2');
	mHeadingParaTag   = $('.mHeadingSep').find('.uvc-sub-heading');

	mHeadingNormal = mHeadingNormalTag.html();
	mHeadingPara   = mHeadingParaTag.html();
	
	$('body').on("click", ".hover-icon", function() {
	    $(".hover-icon").removeClass("active");
	    $(this).addClass("active");
	    mHeadingNormalTag.html( $(this).data('title') );
	    mHeadingParaTag.html( '<p>' + $(this).data('description') + "</p>" );
	});

	/*$(".hover-icon").hover(
	    function() {
	        mHeadingNormalTag.html( $(this).data('title') );
		mHeadingParaTag.html( '<p>' + $(this).data('description') + "</p>" );
	    },
	    function() {
	        mHeadingNormalTag.html( mHeadingNormal );
		mHeadingParaTag.html( mHeadingPara );
	    }
	 );*/
	
	
	
})
