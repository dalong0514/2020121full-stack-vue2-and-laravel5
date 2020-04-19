/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./node_modules/vue/dist/vue.common.js":
/*!*********************************************!*\
  !*** ./node_modules/vue/dist/vue.common.js ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

throw new Error("Module build failed: Error: ENOENT: no such file or directory, open '/Users/Daglas/GitHub/bookcode/2020121Full-Stack-Vuejs2-and-Laravel5/laravel/node_modules/vue/dist/vue.common.js'");

/***/ }),

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _helpers__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./helpers */ "./resources/js/helpers.js");
// import Vue from 'vue';
window.Vue = __webpack_require__(/*! vue */ "./node_modules/vue/dist/vue.common.js");

var model = JSON.parse(window.vuebnb_listing_model);
model = Object(_helpers__WEBPACK_IMPORTED_MODULE_0__["populateAmenitiesAndPrices"])(model); // Vue 实例

var vm = new Vue({
  el: "#app",
  // ployfills
  data: Object.assign(model, {
    headerImageStyle: {
      "background-image": "url(".concat(model.images[0], ")")
    },
    contracted: true,
    modalOpen: false
  }),
  methods: {
    escapeKeyListenser: function escapeKeyListenser(evt) {
      if (evt.keyCode === 27 && this.modalOpen) {
        vm.modalOpen = false;
      }
    }
  },
  watch: {
    modalOpen: function modalOpen() {
      var className = "modal-open";

      if (this.modalOpen) {
        document.body.classList.add(className);
      } else {
        document.body.classList.remove(className);
      }
    }
  },
  created: function created() {
    document.addEventListener('keyup', this.escapeKeyListenser);
  },
  destoryed: function destoryed() {
    document.removeEventListener('keyup', this.escapeKeyListenser);
  }
});
document.addEventListener('keyup', function (evt) {
  if (evt.keyCode === 27 && vm.modalOpen) {
    vm.modalOpen = false;
  }
});
console.log(vm.data);

/***/ }),

/***/ "./resources/js/helpers.js":
/*!*********************************!*\
  !*** ./resources/js/helpers.js ***!
  \*********************************/
/*! exports provided: populateAmenitiesAndPrices, groupByCountry */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "populateAmenitiesAndPrices", function() { return populateAmenitiesAndPrices; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "groupByCountry", function() { return groupByCountry; });
var amenities = new Map();
amenities.set('amenity_wifi', {
  title: 'Wireless Internet',
  icon: 'fa-wifi'
});
amenities.set('amenity_pets_allowed', {
  title: 'Pets Allowed',
  icon: 'fa-paw'
});
amenities.set('amenity_tv', {
  title: 'TV',
  icon: 'fa-television'
});
amenities.set('amenity_kitchen', {
  title: 'Kitchen',
  icon: 'fa-cutlery'
});
amenities.set('amenity_breakfast', {
  title: 'Breakfast',
  icon: 'fa-coffee'
});
amenities.set('amenity_laptop', {
  title: 'Laptop friendly workspace',
  icon: 'fa-laptop'
});
var prices = new Map();
prices.set('price_per_night', 'Per night');
prices.set('price_extra_people', 'Extra people');
prices.set('price_weekly_discount', 'Weekly discount');
prices.set('price_monthly_discount', 'Monthly discount');

var populateAmenitiesAndPrices = function populateAmenitiesAndPrices(state) {
  if (!state) return {};
  var obj = {
    id: state.id,
    title: state.title,
    address: state.address,
    about: state.about,
    amenities: [],
    prices: [],
    images: []
  };

  for (var key in state) {
    var arr = key.split("_");

    if (arr[0] === 'amenity' && state[key]) {
      obj.amenities.push(key);
    }

    if (arr[0] === 'price') {
      obj.prices.push({
        title: key,
        value: state[key]
      });
    }

    if (arr[0] === 'image') {
      obj.images.push(state[key]);
    }
  }

  obj.amenities = obj.amenities.map(function (item) {
    return amenities.get(item);
  });
  obj.prices = obj.prices.map(function (item) {
    item.title = prices.get(item.title);
    return item;
  });
  return obj;
};



var groupByCountry = function groupByCountry(listings) {
  if (!listings) return {};
  return listings.reduce(function (rv, x) {
    var key = ['Taiwan', 'Poland', 'Cuba'].find(function (country) {
      return x.address.indexOf(country) > -1;
    });

    if (!rv[key]) {
      rv[key] = [];
    }

    rv[key].push(x);
    return rv;
  }, {});
};



/***/ }),

/***/ 0:
/*!***********************************!*\
  !*** multi ./resources/js/app.js ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Users/Daglas/GitHub/bookcode/2020121Full-Stack-Vuejs2-and-Laravel5/laravel/resources/js/app.js */"./resources/js/app.js");


/***/ })

/******/ });