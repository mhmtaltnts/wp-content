!function(e){var t={};function n(r){if(t[r])return t[r].exports;var i=t[r]={i:r,l:!1,exports:{}};return e[r].call(i.exports,i,i.exports,n),i.l=!0,i.exports}n.m=e,n.c=t,n.d=function(e,t,r){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var i in e)n.d(r,i,function(t){return e[t]}.bind(null,i));return r},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="",n(n.s=103)}({103:function(e,t){jQuery(document).ready((function(){var e,t,n,r,i=jQuery.noConflict();!function(e){var t=i("#bulk-action-user-ids"),n=i("#bulk-action-course-ids"),r=i("#bulk-learner-action-submit"),a=i("#bulk-learner-actions-form"),o=i("#bulk-action-selector-top"),s=i("#sensei-bulk-action"),l=i(".sensei-course-select"),c=i("#bulk-action-course-select"),u=i(".sensei_user_select_id"),d=i("#cb-select-all-1"),f=i(".learner-course-overview-detail"),v=i(".learner-course-overview-detail-btn"),h=i("#cb-select-all-2"),p=i("#sensei-bulk-learner-actions-modal-toggle"),b=i("#sensei-bulk-learner-actions-modal"),k=function(t,n){t.on("click",(function(){e.resetSelectedUserIds(),t.is(":checked")?(n.attr("checked","checked"),u.attr("checked","checked"),u.each((function(t,n){e.updateSelectedUserIdsFromCheckbox(i(n))}))):(u.removeAttr("checked"),n.removeAttr("checked")),m()}))},m=function(){var t=e.validator(),n=t.validateBulkAction(),r=t.validateSelectedUserIds();n.isValid&&r.isValid?p.removeAttr("disabled"):p.attr("disabled",!0)};l.select2({placeholder:window.sensei_learners_bulk_data.select_course_placeholder,width:"300px"}),u.on("change",(function(t){var n=i(this);t.preventDefault(),t.stopPropagation(),e.updateSelectedUserIdsFromCheckbox(n),m()})),k(d,h),k(h,d),p.attr("disabled",!0),p.on("click",(function(){return b.modal({fadeDuration:100,fadeDelay:.5}),!1})),v.on("click",(function(e){e.preventDefault(),e.stopPropagation();var t=i(this).siblings(".learner-course-overview-detail").first();f.filter(":visible").slideUp("slow"),t.is(":hidden")?t.slideDown("slow"):t.slideUp("slow")})),o.on("change",(function(){s.val(o.val().trim()),e.setAction(s.val()),m()})),c.on("change",(function(){e.setCourseIds(c.val()).validator().validateCourseIds().isValid?r.removeAttr("disabled"):r.attr("disabled",!0)})),r.attr("disabled",!0),r.on("click",(function(r){r.preventDefault(),r.stopPropagation(),e.setCourseIds(c.val()).setAction(s.val().trim()),e.validate().isValid&&(t.val(e.getUserIds().join(",")),n.val(c.val().join(",")),a.submit())}))}((e=[],t=[],n="",r={isValid:!0,reason:""},{updateSelectedUserIdsFromCheckbox:function(t){var n=parseInt(t.val(),10),r=e.indexOf(n);return t.is(":checked")?r<0&&e.push(n):r>-1&&e.splice(r,1),this},getUserIds:function(){return e},setAction:function(e){return n=e,this},setCourseIds:function(e){var n,r,a;return n=e,r=function(e){return parseInt(e,10)},a=[],i.each(n,(function(e,t){a.push(r(t))})),t=a,this},resetSelectedUserIds:function(){return e=[],this},resetAll:function(){return this.resetSelectedUserIds(),t=[],n="",this},validator:function(){return{validateBulkAction:function(){return""==n?{isValid:!1,reason:"Select an action"}:r},validateCourseIds:function(){return 0===(e=t,n=function(e){return!isNaN(e)},a=[],i.each(e,(function(e,t){n(t)&&a.push(t)})),a).length?{isValid:!1,reason:"Select a course"}:r;var e,n,a},validateSelectedUserIds:function(){return 0===e.length?{isValid:!1,reason:"Select some learners"}:r},validate:function(){for(var e,t=[this.validateSelectedUserIds,this.validateBulkAction,this.validateCourseIds];t.length>0;)if(!(e=t.shift().call(this)).isValid)return e;return r}}},validate:function(){return this.validator().validate()}}))}))}});