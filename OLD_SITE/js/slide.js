function slideIt()
{
	document.images.slide.src=eval("image"+step+".src");

	if (step < 18) {
		step++;
	} else {
		step=1;
	}

	setTimeout("slideIt()",3000);
}