#

[![PHP CI](https://github.com/fey/digital-spectr-academy/actions/workflows/main.yml/badge.svg)](https://github.com/fey/digital-spectr-academy/actions/workflows/main.yml)

## Commands

```bash
make install # install deps

make test # run tests

make lint # run linter

make start # start server for Shapes api
```

## Shapes api

Install and start server (see commands above)

Endpoint `POST localhost:8000/shapes/calculate`

params:

* shape - `triangle`, `circle`, `square`
* method: - `perimeter`, `area`
* params (depends on shape type):
  * Square: `side`
  * Triangle: `sideA`, `sideB`, `sideC`
  * Circle: `radius`

Examples:

Calculate Triangle perimeter:

```bash
curl  -X POST \
  'localhost:8000/shapes/calculate' \
  --header 'Accept: */*' \
  --header 'Content-Type: application/json' \
  --data-raw '{
  "shape": "triangle",
  "method": "perimeter",
  "params": {
    "sideA": 3,
    "sideB": 5,
    "sideC": 7
  }
}'
```

Response:

```json
{
  "data": {
    "method": "perimeter",
    "shape": "triangle",
    "result": 15
  }
}```


Square area:

```bash
curl  -X POST \
  'localhost:8000/shapes/calculate' \
  --header 'Accept: */*' \
  --header 'Content-Type: application/json' \
  --data-raw '{
  "shape": "square",
  "method": "area",
  "params": {
    "side": 5
  }
}'
```

Response:

```json
{
  "data": {
    "method": "area",
    "shape": "square",
    "result": 25
  }
}
```

Circle area:

```bash
curl  -X POST \
  'localhost:8000/shapes/calculate' \
  --header 'Accept: */*' \
  --header 'Content-Type: application/json' \
  --data-raw '{
  "shape": "circle",
  "method": "area",
  "params": {
    "radius": 5
  }
}'
```

Response:

```json
{
  "data": {
    "method": "area",
    "shape": "circle",
    "result": 78.53981633974483
  }
}
```

### Validation

Works with float values

```bash
curl  -X POST \
  'localhost:8000/shapes/calculate' \
  --header 'Accept: */*' \
  --header 'Content-Type: application/json' \
  --data-raw '{
  "shape": "square",
  "method": "area",
  "params": {
    "side": 5.0
  }
}'
```

Response:

```json
{
  "data": {
    "method": "area",
    "shape": "square",
    "result": 25
  }
}
```

Validation errors:

```json
{
  "message": "side should be integer or float"
}
```

```json
{
  "message": "side is required"
}
```

```json
{
  "message": "round is invalid method, valid methods: perimeter, area"
}
```

```json
{
  "message": "round is invalid shape type, valid types: triangle, circle, square"
}
```
