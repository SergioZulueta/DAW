import {Autor} from "./Autor";
export class Libro{

    private _titulo: string;
    private _ISBN: string;
    private _tipo: string;
    private _ejemplares: number;
    private _disponibilidad: boolean;
    private _fecha: string;
    private _autor: Autor;


    constructor(titulo: string, ISBN: string, tipo: string, ejemplares: number, disponibilidad: boolean, fecha: string, autor: Autor) {
        this._titulo = titulo;
        this._ISBN = ISBN;
        this._tipo = tipo;
        this._ejemplares = ejemplares;
        this._disponibilidad = disponibilidad;
        this._fecha = fecha;
        this._autor = autor;
    }


    get titulo(): string {
        return this._titulo;
    }

    set titulo(value: string) {
        this._titulo = value;
    }

    get ISBN(): string {
        return this._ISBN;
    }

    set ISBN(value: string) {
        this._ISBN = value;
    }

    get tipo(): string {
        return this._tipo;
    }

    set tipo(value: string) {
        this._tipo = value;
    }

    get ejemplares(): number {
        return this._ejemplares;
    }

    set ejemplares(value: number) {
        this._ejemplares = value;
    }

    get disponibilidad(): boolean {
        return this._disponibilidad;
    }

    set disponibilidad(value: boolean) {
        this._disponibilidad = value;
    }

    get fecha(): string {
        return this._fecha;
    }

    set fecha(value: string) {
        this._fecha = value;
    }

    get autor(): Autor {
        return this._autor;
    }

    set autor(value: Autor) {
        this._autor = value;
    }
}

