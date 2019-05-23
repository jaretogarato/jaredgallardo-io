/*jslint browser: true*/
/*global $, jQuery, TimelineLite, TimelineMax, TweenMax, TweenLite, Linear, Back, console*/

var
	frame = $("#frame"),
  tl = new TimelineMax({repeat: -1, delay: 0});

// tl.ticker.fps(30);

var colors = ["#FFFF00", "#00FF00", "#00FFFF", "#0000FF", "#FF00FF", "#ED1C24", "#FFF200", "#00A651", "#00AEEF", "#2E3192", "#EC008C", "#FFFF00"];

document.getElementById("yoursvg").addEventListener("load", function () {
	"use strict";
  var
	  svgObject = document.getElementById("yoursvg"),
	  svgDoc = svgObject.contentDocument,
		svgChild = svgDoc.getElementById("st0"),
		tlCirc01 = new TimelineMax({repeat: -1}),
		j;
	for (j = 0; j < colors.length; j++) {
		tlCirc01.to(svgChild, 1, {fill: colors[j], ease: Linear.ease, autoAlpha: 0.5});
  }
});

function buildElements(i) {
	"use strict";
  var
		element = $('<object class="coicle" id="coicle-' + (i + 1) + '" data="images/circle-01-green.svg" type="image/svg+xml"></object>'),
	  tween = new TweenMax.to(element, 0.1, {autoAlpha: 0.0, x: 0, y: 0, scale: 0.5, ease: Back.easeOut.config(2)});

	frame.append(element);
	return tween;
}

function mvElems(i, xto, yto, dur, del, scaleTo, opacityTo, xTail, yTail) {
	"use strict";
	var
		element = $('#coicle-' + (i + 1)),
		tween = new TweenMax.to(element, dur, { delay: del, autoAlpha: opacityTo, x: (xto + xTail * i), y: (yto + yTail * i), scale: scaleTo, ease: Back.easeOut.config(2) });
	return tween;
}

function doTimeline() {
	"use strict";
	var
	  i = 0, j = 0, // iterators
		e = 10, // number of elements
		s = 100, // number of steps in animation
		xMax = 838, xTo,
		yMax = 400, yTo,
		scaleMin = 0.1, scaleMax = 8, scaleTo,
		durMin = 0.4, durMax = 2, durTo,
		delMin = 0.001, delMax = 0.01, delTo,
		opacMin = 0.1, opacMax = 0.4, opacTo,
		lag = 0.1, gap = 0.01, period, xTail, yTail,
		insertionPoint = 0;

	function getVectoritos() {
		xTo = Math.random() * xMax;
		yTo = Math.random() * yMax;
		scaleTo = Math.random() * (scaleMax - scaleMin) + scaleMin;
		durTo = Math.random() * (durMax - durMin) + durMin;
		// delTo = Math.random() * (delMax - delMin) + delMin;
		delTo = 0;
		period = durTo + delTo;
		opacTo = Math.random() * (opacMax - opacMin) + opacMin;
		xTail = Math.random() * 50 - 25;
		yTail = Math.random() * 50 - 25;
	}

	for (i = 0; i < e; i++) { tl.add(buildElements(i), 0); } // create the elements

	for (j = 0; j < s; j++) { // create movements
		getVectoritos();
		insertionPoint = insertionPoint + period * 0.3;
		for (i = 0; i < e; i++) {
			insertionPoint = insertionPoint + lag;
			tl.add(mvElems(i, xTo, yTo, durTo, delTo, scaleTo, opacTo, xTail, yTail), insertionPoint);
			// console.log(insertionPoint);
		}
		// console.log(period, durTo, delTo, lag, (durTo + delTo + lag), scaleTo, opacTo, xTail, yTail);
		// console.log('--------------');
	}

	//for (i = 0; i < e; i++) { // clear elements for the last step
	//	tl.add(mvElems(i, 0, 0, 0.4, 0, 0.1, 0, 10, 10), insertionPoint + 1);
	//}
}
// console.log(tl.timeline);


//smooth play pause by tweening the timeScale()
// $("#playPause").click(function () {
//   if (this.innerHTML === "play") {
//     this.innerHTML = "pause";
//     TweenLite.to(tl, 2, {timeScale: 1});
//   } else {
//     this.innerHTML = "play";
//     TweenLite.to(tl, 2, {timeScale: 0});
//   }
// });

doTimeline();
// tl.progress(0.0).timeScale(0);
tl.progress(0.0).timeScale(1.1);
