/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you require will output into a single css file (app.css in this case)
require('../sass/styles.scss');
//require('choices.js/src/styles/base.scss');
require('choices.js/src/styles/choices.scss');

// Need jQuery? Install it with "yarn add jquery", then uncomment to require it.
// const $ = require('jquery');

import axios from 'axios';
import Choices from 'choices.js';



const container = document.querySelector('#result');


let data = [{
  value: 'Option 1',
  label: 'Option 1',
  selected: true,
  disabled: false,
},
{
  value: 'Option 2',
  label: 'Option 2',
  selected: false,
  disabled: true,
  customProperties: {
    description: 'Custom description about Option 2',
    random: 'Another random custom property'
  },
}];
// const select = new Choices('.js-choice',{
//   choices: data,
// });

//const queryBox = document.querySelector('#query');
// queryBox.addEventListener('keyup',function(e){
//   container.innerHTML = '';
//   if(this.value.length > 2) {
//     console.log(this.value)
//     let requestBody = "name="+this.value;
//     let request = axios.post('http://stapi.co/api/v1/rest/character/search',requestBody,{ 
//     headers: {
//       'Content-Type': 'application/x-www-form-urlencoded'
//     }
//   });
//   request.then(res => {
//     let characters = res.data.characters;
    
//     characters.forEach(function(character){
//       container.innerHTML += `<li>${character.name}</li>`;    
//     })   
//   })
//   .catch(err => console.log(err));
//   }
// })

function createFanclub(e) {
  e.preventDefault();
  let requestBody = {
    name : document.querySelector('#fanclubName').value,
    series : document.querySelector('#seriesName').value
  }
  let request = axios.post('/create/fanclub',requestBody);
  request.then(res => {
   console.log(res);
  });
}

document.querySelector('#createFanclub').addEventListener('click',createFanclub);