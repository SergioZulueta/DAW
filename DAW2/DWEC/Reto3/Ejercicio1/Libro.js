"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
var Libro = /** @class */ (function () {
    function Libro(titulo, ISBN, tipo, ejemplares, disponibilidad, fecha, autor) {
        this._titulo = titulo;
        this._ISBN = ISBN;
        this._tipo = tipo;
        this._ejemplares = ejemplares;
        this._disponibilidad = disponibilidad;
        this._fecha = fecha;
        this._autor = autor;
    }
    Object.defineProperty(Libro.prototype, "titulo", {
        get: function () {
            return this._titulo;
        },
        set: function (value) {
            this._titulo = value;
        },
        enumerable: true,
        configurable: true
    });
    Object.defineProperty(Libro.prototype, "ISBN", {
        get: function () {
            return this._ISBN;
        },
        set: function (value) {
            this._ISBN = value;
        },
        enumerable: true,
        configurable: true
    });
    Object.defineProperty(Libro.prototype, "tipo", {
        get: function () {
            return this._tipo;
        },
        set: function (value) {
            this._tipo = value;
        },
        enumerable: true,
        configurable: true
    });
    Object.defineProperty(Libro.prototype, "ejemplares", {
        get: function () {
            return this._ejemplares;
        },
        set: function (value) {
            this._ejemplares = value;
        },
        enumerable: true,
        configurable: true
    });
    Object.defineProperty(Libro.prototype, "disponibilidad", {
        get: function () {
            return this._disponibilidad;
        },
        set: function (value) {
            this._disponibilidad = value;
        },
        enumerable: true,
        configurable: true
    });
    Object.defineProperty(Libro.prototype, "fecha", {
        get: function () {
            return this._fecha;
        },
        set: function (value) {
            this._fecha = value;
        },
        enumerable: true,
        configurable: true
    });
    Object.defineProperty(Libro.prototype, "autor", {
        get: function () {
            return this._autor;
        },
        set: function (value) {
            this._autor = value;
        },
        enumerable: true,
        configurable: true
    });
    return Libro;
}());
exports.Libro = Libro;
