/*
 *addNamesDomFromArray.js
 Author: Luke Johnson
 takes an array of names and creates a DOM element for each name.
this is a php file using javascript code.
As a note, the javascript file had to be put in the public folder to be accessed by the view, and the view needed to use a path starting at the root.
 */

export function AddNamesDomFromArray($names) {
	if (Array.isArray($names)) {
		for (let namesIndex = 0; namesIndex <= $names.length; namesIndex ++) {
			//add a dom element for that name.
			const domElement = document.getElementById("names");
			const name = document.createElement("div");
			name.innerText = $names[namesIndex];
			domElement.appendChild(name);
		}
	}
}
