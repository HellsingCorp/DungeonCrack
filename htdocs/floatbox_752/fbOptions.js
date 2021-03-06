this.fb = this.fb || {};

fb.fbOptions = {

// See the instructions for information about setting floatbox options.
// See the options reference for details about all the available options.
// Commas are required after each entry except the last entry in a block.
// A comma after the last entry in a block will cause the option settings to fail in some browsers.

// The 'global' section sets the license key and changes default Floatbox options site-wide.
// configurator.html in the floatbox install folder can be used to generate global option settings through form selection.

// When all the option preferences in this file are set as desired,
// loading of Floatbox can be optimized by removing any 'className' option sections not in use on the site,
// minifying this file with a tool such as http://skalman.github.io/UglifyJS-online/
// and appending the minified code to the bottom of the floatbox.js file.

global: {
  licenseKey: "",
  colorTheme: "black",
  shadowType: "hybrid",
  showClose: true,
  enableDragResize: true,
  contentBackgroundColor: "#000000",
  textColor: "#c41913",
  boxColor: "#000000",
  animationTime: 3
},

// This mobile section assigns overrides to be applied to small-screened mobile devices only.
mobile: {
  showControlsText: false,
  showItemNumber: false,
  showPrint: false,
  numIndexLinks: 0,
  strictCentering: false,
  padding: 12,
  panelPadding: 4,
  navType: "button",
  imageTransition: "slide",
  preloadLimit: 1
},

// Option settings can be assigned based on floatbox content type.
// Each type is assigned options either is string format,
// the same as options placed in a link's data-fb-options (or rev) attribute,
// or as Javascript Object Notation, the same as other sections in this file.
// example - iframe: "colorTheme:blue showNewWindow:true",
// or - iframe: { colorTheme: "blue", showNewWindow: true },

type: {
  image: "",
  // html settings apply to all 5 html sub-types that follow
  html: "",
    iframe: "",
    inline: "",
    ajax: "",
    direct: "",
    pdf: "mobile:`newWindow:true`",
  // media settings apply to the 2 sub-types as well
  media: "",
    video: "height:56.25%w",
    flash: ""
},

// Settings can propogate to groups of anchors by assigning the anchors a class name
// and associating that class name with a string or object of options here.
// The syntax is the same as for 'type' options above.

className: {
  modern: {
    colorTheme: "silver",
    innerBorderColor: "#ccc",
    outerBorderColor: "#eee",
    innerBorder: 0,
    outerBorder: 8,
    padding: 0,
    panelPadding: 4,
    boxCornerRadius: 0,
    shadowType: "hybrid",
    navType: "overlay",
    captionPos: "tc",
    caption2Pos: "tc",
    infoLinkPos: "tc",
    printLinkPos: "tc",
    itemNumberPos: "tl",
    newWindowLinkPos: "tr",
    indexPos: "tl",
    controlsPos: "tr",
    overlayFadeTime: 0.3,
    resizeTime: 0.4,
    transitionTime: 0.5
  },
  alt: {
    shadowType: "hybrid",
    showClose: false,
    showOuterClose: true,
    captionPos: "bc",
    caption2Pos: "tl",
    infoLinkPos: "tl",
    printLinkPos: "tl",
    newWindowLinkPos: "tl",
    controlsPos: "tr",
    centerNav: true
  },
  transparent: {
    boxColor: "transparent",
    contentBackgroundColor: "transparent",
    boxCornerRadius: 0,
    shadowType: "none",
    showOuterClose: true,
    showClose: false,
    overlayOpacity: 0.75,
    outerBorder: 2,
    innerBorder: 0,
    zoomBorder: 0
  },
  naked: {
    boxCornerRadius: 0,
    showOuterClose: true,
    showClose: false,
    inFrameResize: false,
    showItemNumber: false,
    navType: "overlay",
    showNavOverlay: true,
    caption: null,
    outerBorder: 0,
    innerBorder: 0,
    zoomBorder: 0,
    padding: 0,
    panelPadding: 0
  },
  fbInfo: {  // applies to boxes opened from Info... links
    boxCornerRadius: 6,
    shadowSize: 8,
    padding: 18,
    overlayOpacity: 0.45,
    resizeTime: 0.3,
    fadeTime: 0,
    transitionTime: 0.3,
    overlayFadeTime: 0.3
  },
  fbTooltip: {  // tooltip options
  },
  fbContext: {  // contextBox options
  }
}
};
