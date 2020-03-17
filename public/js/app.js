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

/***/ "./node_modules/uikit/src/js/api/component.js":
/*!****************************************************!*\
  !*** ./node_modules/uikit/src/js/api/component.js ***!
  \****************************************************/
/*! exports provided: default, getComponentName */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "getComponentName", function() { return getComponentName; });
!(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }());


/* harmony default export */ __webpack_exports__["default"] = (function (UIkit) {

    const DATA = UIkit.data;

    const components = {};

    UIkit.component = function (name, options) {

        const id = !(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(name);

        name = !(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(id);

        if (!options) {

            if (!(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(components[name])) {
                components[name] = UIkit.extend(components[name]);
            }

            return components[name];

        }

        UIkit[name] = function (element, data) {

            const component = UIkit.component(name);

            return component.options.functional
                ? new component({data: !(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(element) ? element : [...arguments]})
                : !element ? init(element) : !(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(element).map(init)[0];

            function init(element) {

                const instance = UIkit.getComponent(element, name);

                if (instance) {
                    if (!data) {
                        return instance;
                    } else {
                        instance.$destroy();
                    }
                }

                return new component({el: element, data});

            }

        };

        const opt = !(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(options) ? !(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())({}, options) : options.options;

        opt.name = name;

        if (opt.install) {
            opt.install(UIkit, opt, name);
        }

        if (UIkit._initialized && !opt.functional) {
            !(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }()).read(() => UIkit[name](`[uk-${id}],[data-uk-${id}]`));
        }

        return components[name] = !(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(options) ? opt : options;
    };

    UIkit.getComponents = element => element && element[DATA] || {};
    UIkit.getComponent = (element, name) => UIkit.getComponents(element)[name];

    UIkit.connect = node => {

        if (node[DATA]) {
            for (const name in node[DATA]) {
                node[DATA][name]._callConnected();
            }
        }

        for (let i = 0; i < node.attributes.length; i++) {

            const name = getComponentName(node.attributes[i].name);

            if (name && name in components) {
                UIkit[name](node);
            }

        }

    };

    UIkit.disconnect = node => {
        for (const name in node[DATA]) {
            node[DATA][name]._callDisconnected();
        }
    };

});

function getComponentName(attribute) {
    return !(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(attribute, 'uk-') || !(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(attribute, 'data-uk-')
        ? !(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(attribute.replace('data-uk-', '').replace('uk-', ''))
        : false;
}


/***/ }),

/***/ "./node_modules/uikit/src/js/api/global.js":
/*!*************************************************!*\
  !*** ./node_modules/uikit/src/js/api/global.js ***!
  \*************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
!(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }());


/* harmony default export */ __webpack_exports__["default"] = (function (UIkit) {

    const DATA = UIkit.data;

    UIkit.use = function (plugin) {

        if (plugin.installed) {
            return;
        }

        plugin.call(null, this);
        plugin.installed = true;

        return this;
    };

    UIkit.mixin = function (mixin, component) {
        component = (!(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(component) ? UIkit.component(component) : component) || this;
        component.options = !(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(component.options, mixin);
    };

    UIkit.extend = function (options) {

        options = options || {};

        const Super = this;
        const Sub = function UIkitComponent(options) {
            this._init(options);
        };

        Sub.prototype = Object.create(Super.prototype);
        Sub.prototype.constructor = Sub;
        Sub.options = !(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(Super.options, options);

        Sub.super = Super;
        Sub.extend = Super.extend;

        return Sub;
    };

    UIkit.update = function (element, e) {

        element = element ? !(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(element) : document.body;

        !(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(element).reverse().forEach(element => update(element[DATA], e));
        !(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(element, element => update(element[DATA], e));

    };

    let container;
    Object.defineProperty(UIkit, 'container', {

        get() {
            return container || document.body;
        },

        set(element) {
            container = !(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(element);
        }

    });

    function update(data, e) {

        if (!data) {
            return;
        }

        for (const name in data) {
            if (data[name]._connected) {
                data[name]._callUpdate(e);
            }
        }

    }
});


/***/ }),

/***/ "./node_modules/uikit/src/js/api/hooks.js":
/*!************************************************!*\
  !*** ./node_modules/uikit/src/js/api/hooks.js ***!
  \************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
!(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }());


/* harmony default export */ __webpack_exports__["default"] = (function (UIkit) {

    UIkit.prototype._callHook = function (hook) {

        const handlers = this.$options[hook];

        if (handlers) {
            handlers.forEach(handler => handler.call(this));
        }
    };

    UIkit.prototype._callConnected = function () {

        if (this._connected) {
            return;
        }

        this._data = {};
        this._computeds = {};
        this._frames = {reads: {}, writes: {}};

        this._initProps();

        this._callHook('beforeConnect');
        this._connected = true;

        this._initEvents();
        this._initObserver();

        this._callHook('connected');
        this._callUpdate();
    };

    UIkit.prototype._callDisconnected = function () {

        if (!this._connected) {
            return;
        }

        this._callHook('beforeDisconnect');

        if (this._observer) {
            this._observer.disconnect();
            this._observer = null;
        }

        this._unbindEvents();
        this._callHook('disconnected');

        this._connected = false;

    };

    UIkit.prototype._callUpdate = function (e = 'update') {

        const type = e.type || e;

        if (!(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(['update', 'resize'], type)) {
            this._callWatches();
        }

        const updates = this.$options.update;
        const {reads, writes} = this._frames;

        if (!updates) {
            return;
        }

        updates.forEach(({read, write, events}, i) => {

            if (type !== 'update' && !!(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(events, type)) {
                return;
            }

            if (read && !!(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(!(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }()).reads, reads[i])) {
                reads[i] = !(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }()).read(() => {

                    const result = this._connected && read.call(this, this._data, type);

                    if (result === false && write) {
                        !(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }()).clear(writes[i]);
                    } else if (!(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(result)) {
                        !(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(this._data, result);
                    }
                });
            }

            if (write && !!(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(!(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }()).writes, writes[i])) {
                writes[i] = !(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }()).write(() => this._connected && write.call(this, this._data, type));
            }

        });

    };

    UIkit.prototype._callWatches = function () {

        const {_frames} = this;

        if (_frames.watch) {
            return;
        }

        const initital = !!(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(_frames, 'watch');

        _frames.watch = !(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }()).read(() => {

            if (!this._connected) {
                return;
            }

            const {$options: {computed}, _computeds} = this;

            for (const key in computed) {

                const hasPrev = !(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(_computeds, key);
                const prev = _computeds[key];

                delete _computeds[key];

                const {watch, immediate} = computed[key];
                if (watch && (
                    initital && immediate
                    || hasPrev && !!(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(prev, this[key])
                )) {
                    watch.call(this, this[key], prev);
                }

            }

            _frames.watch = null;

        });

    };

});


/***/ }),

/***/ "./node_modules/uikit/src/js/api/index.js":
/*!************************************************!*\
  !*** ./node_modules/uikit/src/js/api/index.js ***!
  \************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _global__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./global */ "./node_modules/uikit/src/js/api/global.js");
/* harmony import */ var _hooks__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./hooks */ "./node_modules/uikit/src/js/api/hooks.js");
/* harmony import */ var _state__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./state */ "./node_modules/uikit/src/js/api/state.js");
/* harmony import */ var _instance__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./instance */ "./node_modules/uikit/src/js/api/instance.js");
/* harmony import */ var _component__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./component */ "./node_modules/uikit/src/js/api/component.js");
!(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }());







const UIkit = function (options) {
    this._init(options);
};

UIkit.util = !(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }());
UIkit.data = '__uikit__';
UIkit.prefix = 'uk-';
UIkit.options = {};
UIkit.version = VERSION;

Object(_global__WEBPACK_IMPORTED_MODULE_0__["default"])(UIkit);
Object(_hooks__WEBPACK_IMPORTED_MODULE_1__["default"])(UIkit);
Object(_state__WEBPACK_IMPORTED_MODULE_2__["default"])(UIkit);
Object(_component__WEBPACK_IMPORTED_MODULE_4__["default"])(UIkit);
Object(_instance__WEBPACK_IMPORTED_MODULE_3__["default"])(UIkit);

/* harmony default export */ __webpack_exports__["default"] = (UIkit);


/***/ }),

/***/ "./node_modules/uikit/src/js/api/instance.js":
/*!***************************************************!*\
  !*** ./node_modules/uikit/src/js/api/instance.js ***!
  \***************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
!(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }());


/* harmony default export */ __webpack_exports__["default"] = (function (UIkit) {

    const DATA = UIkit.data;

    UIkit.prototype.$create = function (component, element, data) {
        return UIkit[component](element, data);
    };

    UIkit.prototype.$mount = function (el) {

        const {name} = this.$options;

        if (!el[DATA]) {
            el[DATA] = {};
        }

        if (el[DATA][name]) {
            return;
        }

        el[DATA][name] = this;

        this.$el = this.$options.el = this.$options.el || el;

        if (!(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(el, document)) {
            this._callConnected();
        }
    };

    UIkit.prototype.$reset = function () {
        this._callDisconnected();
        this._callConnected();
    };

    UIkit.prototype.$destroy = function (removeEl = false) {

        const {el, name} = this.$options;

        if (el) {
            this._callDisconnected();
        }

        this._callHook('destroy');

        if (!el || !el[DATA]) {
            return;
        }

        delete el[DATA][name];

        if (!!(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(el[DATA])) {
            delete el[DATA];
        }

        if (removeEl) {
            !(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(this.$el);
        }
    };

    UIkit.prototype.$emit = function (e) {
        this._callUpdate(e);
    };

    UIkit.prototype.$update = function (element = this.$el, e) {
        UIkit.update(element, e);
    };

    UIkit.prototype.$getComponent = UIkit.getComponent;

    const names = {};
    Object.defineProperties(UIkit.prototype, {

        $container: Object.getOwnPropertyDescriptor(UIkit, 'container'),

        $name: {

            get() {
                const {name} = this.$options;

                if (!names[name]) {
                    names[name] = UIkit.prefix + !(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(name);
                }

                return names[name];
            }

        }

    });

});


/***/ }),

/***/ "./node_modules/uikit/src/js/api/state.js":
/*!************************************************!*\
  !*** ./node_modules/uikit/src/js/api/state.js ***!
  \************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
!(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }());


/* harmony default export */ __webpack_exports__["default"] = (function (UIkit) {

    let uid = 0;

    UIkit.prototype._init = function (options) {

        options = options || {};
        options.data = normalizeData(options, this.constructor.options);

        this.$options = !(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(this.constructor.options, options, this);
        this.$el = null;
        this.$props = {};

        this._uid = uid++;
        this._initData();
        this._initMethods();
        this._initComputeds();
        this._callHook('created');

        if (options.el) {
            this.$mount(options.el);
        }
    };

    UIkit.prototype._initData = function () {

        const {data = {}} = this.$options;

        for (const key in data) {
            this.$props[key] = this[key] = data[key];
        }
    };

    UIkit.prototype._initMethods = function () {

        const {methods} = this.$options;

        if (methods) {
            for (const key in methods) {
                this[key] = methods[key].bind(this);
            }
        }
    };

    UIkit.prototype._initComputeds = function () {

        const {computed} = this.$options;

        this._computeds = {};

        if (computed) {
            for (const key in computed) {
                registerComputed(this, key, computed[key]);
            }
        }
    };

    UIkit.prototype._initProps = function (props) {

        let key;

        props = props || getProps(this.$options, this.$name);

        for (key in props) {
            if (!!(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(props[key])) {
                this.$props[key] = props[key];
            }
        }

        const exclude = [this.$options.computed, this.$options.methods];
        for (key in this.$props) {
            if (key in props && notIn(exclude, key)) {
                this[key] = this.$props[key];
            }
        }
    };

    UIkit.prototype._initEvents = function () {

        this._events = [];

        const {events} = this.$options;

        if (events) {

            events.forEach(event => {

                if (!!(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(event, 'handler')) {
                    for (const key in event) {
                        registerEvent(this, event[key], key);
                    }
                } else {
                    registerEvent(this, event);
                }

            });
        }
    };

    UIkit.prototype._unbindEvents = function () {
        this._events.forEach(unbind => unbind());
        delete this._events;
    };

    UIkit.prototype._initObserver = function () {

        let {attrs, props, el} = this.$options;
        if (this._observer || !props || attrs === false) {
            return;
        }

        attrs = !(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(attrs) ? attrs : Object.keys(props);

        this._observer = new MutationObserver(() => {

            const data = getProps(this.$options, this.$name);
            if (attrs.some(key => !!(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(data[key]) && data[key] !== this.$props[key])) {
                this.$reset();
            }

        });

        const filter = attrs.map(key => !(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(key)).concat(this.$name);

        this._observer.observe(el, {
            attributes: true,
            attributeFilter: filter.concat(filter.map(key => `data-${key}`))
        });
    };

    function getProps(opts, name) {

        const data = {};
        const {args = [], props = {}, el} = opts;

        if (!props) {
            return data;
        }

        for (const key in props) {
            const prop = !(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(key);
            let value = !(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(el, prop);

            if (!!(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(value)) {

                value = props[key] === Boolean && value === ''
                    ? true
                    : coerce(props[key], value);

                if (prop === 'target' && (!value || !(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(value, '_'))) {
                    continue;
                }

                data[key] = value;
            }
        }

        const options = !(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(!(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(el, name), args);

        for (const key in options) {
            const prop = !(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(key);
            if (props[prop] !== undefined) {
                data[prop] = coerce(props[prop], options[key]);
            }
        }

        return data;
    }

    function registerComputed(component, key, cb) {
        Object.defineProperty(component, key, {

            enumerable: true,

            get() {

                const {_computeds, $props, $el} = component;

                if (!!(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(_computeds, key)) {
                    _computeds[key] = (cb.get || cb).call(component, $props, $el);
                }

                return _computeds[key];
            },

            set(value) {

                const {_computeds} = component;

                _computeds[key] = cb.set ? cb.set.call(component, value) : value;

                if (!(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(_computeds[key])) {
                    delete _computeds[key];
                }
            }

        });
    }

    function registerEvent(component, event, key) {

        if (!!(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(event)) {
            event = ({name: key, handler: event});
        }

        let {name, el, handler, capture, passive, delegate, filter, self} = event;
        el = !(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(el)
            ? el.call(component)
            : el || component.$el;

        if (!(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(el)) {
            el.forEach(el => registerEvent(component, !(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())({}, event, {el}), key));
            return;
        }

        if (!el || filter && !filter.call(component)) {
            return;
        }

        component._events.push(
            !(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(
                el,
                name,
                !delegate
                    ? null
                    : !(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(delegate)
                        ? delegate
                        : delegate.call(component),
                !(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(handler) ? component[handler] : handler.bind(component),
                {passive, capture, self}
            )
        );

    }

    function notIn(options, key) {
        return options.every(arr => !arr || !!(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(arr, key));
    }

    function coerce(type, value) {

        if (type === Boolean) {
            return !(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(value);
        } else if (type === Number) {
            return !(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(value);
        } else if (type === 'list') {
            return !(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(value);
        }

        return type ? type(value) : value;
    }

    function normalizeData({data, el}, {args, props = {}}) {
        data = !(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(data)
            ? !!(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(args)
                ? data.slice(0, args.length).reduce((data, value, index) => {
                    if (!(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(value)) {
                        !(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(data, value);
                    } else {
                        data[args[index]] = value;
                    }
                    return data;
                }, {})
                : undefined
            : data;

        if (data) {
            for (const key in data) {
                if (!(function webpackMissingModule() { var e = new Error("Cannot find module 'uikit-util'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(data[key])) {
                    delete data[key];
                } else {
                    data[key] = props[key] ? coerce(props[key], data[key], el) : data[key];
                }
            }
        }

        return data;
    }
});


/***/ }),

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var uikit_src_js_api__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! uikit/src/js/api */ "./node_modules/uikit/src/js/api/index.js");


/***/ }),

/***/ "./resources/sass/app.sass":
/*!*********************************!*\
  !*** ./resources/sass/app.sass ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/app.sass ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! D:\OSP\OSPanel\domains\toapp.loc\resources\js\app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! D:\OSP\OSPanel\domains\toapp.loc\resources\sass\app.sass */"./resources/sass/app.sass");


/***/ })

/******/ });