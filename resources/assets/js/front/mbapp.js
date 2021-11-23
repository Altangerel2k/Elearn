



import {groupBy} from 'lodash/collection';
import people from './people';

//const managerGroups = groupBy(people, 'manager');
//console.log(JSON.stringify(managerGroups,null,2));

$(document).ready(function() {
console.log("HI TESTING");
  $('.header__nav').on('click', function() {
    $(this).toggleClass("active");
  });
});
