(()=>{"use strict";var e,o={856:()=>{const e=window.wp.blocks,o=window.wp.i18n,n=window.wp.blockEditor,l=window.wp.components,a=window.ReactJSXRuntime,s=JSON.parse('{"UU":"fwd-blocks/animated-school-block"}');(0,e.registerBlockType)(s.UU,{edit:function(e){const s=(0,n.useBlockProps)(),[t,r]=React.useState("fade-up");return(0,a.jsxs)(a.Fragment,{children:[(0,a.jsx)(n.InspectorControls,{children:(0,a.jsx)(l.PanelBody,{title:(0,o.__)("Animation Settings","fwd-blocks"),children:(0,a.jsx)(l.SelectControl,{label:(0,o.__)("Choose AOS Animation","fwd-blocks"),value:t,options:[{label:(0,o.__)("Fade Up","fwd-blocks"),value:"fade-up"},{label:(0,o.__)("Fade Down","fwd-blocks"),value:"fade-down"},{label:(0,o.__)("Fade Left","fwd-blocks"),value:"fade-left"},{label:(0,o.__)("Fade Right","fwd-blocks"),value:"fade-right"}],onChange:e=>r(e)})})}),(0,a.jsx)("div",{...s,"data-aos":t,children:(0,a.jsx)(n.InnerBlocks,{})})]})},save:function(){const e=n.useBlockProps.save();return(0,a.jsx)("div",{...e,"data-aos":e["data-aos"],children:(0,a.jsx)(n.InnerBlocks.Content,{})})}})}},n={};function l(e){var a=n[e];if(void 0!==a)return a.exports;var s=n[e]={exports:{}};return o[e](s,s.exports,l),s.exports}l.m=o,e=[],l.O=(o,n,a,s)=>{if(!n){var t=1/0;for(d=0;d<e.length;d++){for(var[n,a,s]=e[d],r=!0,i=0;i<n.length;i++)(!1&s||t>=s)&&Object.keys(l.O).every((e=>l.O[e](n[i])))?n.splice(i--,1):(r=!1,s<t&&(t=s));if(r){e.splice(d--,1);var c=a();void 0!==c&&(o=c)}}return o}s=s||0;for(var d=e.length;d>0&&e[d-1][2]>s;d--)e[d]=e[d-1];e[d]=[n,a,s]},l.o=(e,o)=>Object.prototype.hasOwnProperty.call(e,o),(()=>{var e={999:0,799:0};l.O.j=o=>0===e[o];var o=(o,n)=>{var a,s,[t,r,i]=n,c=0;if(t.some((o=>0!==e[o]))){for(a in r)l.o(r,a)&&(l.m[a]=r[a]);if(i)var d=i(l)}for(o&&o(n);c<t.length;c++)s=t[c],l.o(e,s)&&e[s]&&e[s][0](),e[s]=0;return l.O(d)},n=globalThis.webpackChunkschool_blocks=globalThis.webpackChunkschool_blocks||[];n.forEach(o.bind(null,0)),n.push=o.bind(null,n.push.bind(n))})();var a=l.O(void 0,[799],(()=>l(856)));a=l.O(a)})();