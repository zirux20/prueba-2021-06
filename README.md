# Prueba de conocimientos generales

En este ejercicio buscamos generar, partir de un schema.json los campos de formularios a partir de un jsonform (de hecho, aquí está el [esquema de ejemplo](https://jsonforms.io/examples/basic), con algunos cambios más simples).

A partir del esquema se debe generar una estructura de clases que permita generar el formulario usando un llamado a la clase ```Form::generate()``` (sí, estático).

Este formulario debe soportar estilos de [Bootstrap v4](https://getbootstrap.com/docs/4.6/getting-started/introduction/) y [Bulma](https://bulma.io/documentation/) (sugerencia: interfaces o patrón adaptador para hacerlo flexible).

## ¿Qué son puntos evaluables?
* Que la respuesta use Orientación a Objetos.
* Que la respuesta genere un formulario en pantalla.
* Que la respuesta, al cambiar un atributo, genere el campo respectivo (por ejemplo, si modifico el ```vegetarian``` a lista de dos valores, lo soporte sin modificar código).
* El estilo de programación (nombre de variables, uso de sintaxis, etc.).
* Comentarios acertados en lugares acertados.

## ¿Qué no evaluaremos?
* Lo "bello" del formulario (no importa si queda en la misma línea o columna).
* Elementos no solicitados (_escribe el código justo y necesario_).
* Uso de javascript, en caso que lo uses.

## Pistas y cómo resolverlo
* Como usas OOP, intenta generar interfaces: te va a ayudar mucho.
* Intenta usar TDD, verás que el código podría estar más pulido (si sabes qué es el concepto).
* No uses Symfony, no se trata de usar el framework, solo el proceso mental y de codificación de resolución.
* Haz el diagrama de UML, o escribe los problemas que hay involucrados: al menos son 2 problemas que se pueden resolver con dos patrones de desarrollo distinto.
* Si vas a usar composer, por favor, que no se olvide hacer commit al composer.lock para hacerlo funcionar.
* _Personal data_ es un título, no lo hagas en forma de recursividad.
