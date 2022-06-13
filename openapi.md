---
title: Calculette v1.0.0
language_tabs:
  - shell: Curl
language_clients:
  - shell: ""
toc_footers: []
includes: []
search: true
highlight_theme: darkula
headingLevel: 2

---

<!-- Generator: Widdershins v4.0.1 -->

<h1 id="calculette">Calculette v1.0.0</h1>

> Scroll down for code samples, example requests and responses. Select a language for code samples from the tabs above or the mobile navigation menu.

Base URLs:

* <a href="http://localhost:8080">http://localhost:8080</a>

* <a href="https://calculette.leafu.fr">https://calculette.leafu.fr</a>

<h1 id="calculette-carre">Carre</h1>

## Calcule l'aire d'un carré

> Code samples

```shell
# You can also use wget
curl -X GET http://localhost:8080/carre/area?len=5 \
  -H 'Accept: application/json'

```

`GET /carre/area`

<h3 id="calcule-l'aire-d'un-carré-parameters">Parameters</h3>

|Name|In|Type|Required|Description|
|---|---|---|---|---|
|len|query|number|true|Longueur d'un côté|

> Example responses

> 200 Response

```json
{
  "area": 25
}
```

<h3 id="calcule-l'aire-d'un-carré-responses">Responses</h3>

|Status|Meaning|Description|Schema|
|---|---|---|---|
|200|[OK](https://tools.ietf.org/html/rfc7231#section-6.3.1)|OK|[Area](#schemaarea)|

<aside class="success">
This operation does not require authentication
</aside>

## Calcule le périmetre d'un carré

> Code samples

```shell
# You can also use wget
curl -X GET http://localhost:8080/carre/perimeter?len=5 \
  -H 'Accept: application/json'

```

`GET /carre/perimeter`

<h3 id="calcule-le-périmetre-d'un-carré-parameters">Parameters</h3>

|Name|In|Type|Required|Description|
|---|---|---|---|---|
|len|query|number|true|Longueur d'un côté|

> Example responses

> 200 Response

```json
{
  "perimeter": 20
}
```

<h3 id="calcule-le-périmetre-d'un-carré-responses">Responses</h3>

|Status|Meaning|Description|Schema|
|---|---|---|---|
|200|[OK](https://tools.ietf.org/html/rfc7231#section-6.3.1)|OK|[Perimeter](#schemaperimeter)|

<aside class="success">
This operation does not require authentication
</aside>

<h1 id="calculette-rectangle">Rectangle</h1>

## Calcule l'aire d'un Rectangle

> Code samples

```shell
# You can also use wget
curl -X GET http://localhost:8080/rectangle/area?width=4&height=6 \
  -H 'Accept: application/json'

```

`GET /rectangle/area`

<h3 id="calcule-l'aire-d'un-rectangle-parameters">Parameters</h3>

|Name|In|Type|Required|Description|
|---|---|---|---|---|
|width|query|number|true|Longueur de la largeur|
|height|query|number|true|Longueur de la hauteur|

> Example responses

> 200 Response

```json
{
  "area": 24
}
```

<h3 id="calcule-l'aire-d'un-rectangle-responses">Responses</h3>

|Status|Meaning|Description|Schema|
|---|---|---|---|
|200|[OK](https://tools.ietf.org/html/rfc7231#section-6.3.1)|OK|[Area](#schemaarea)|

<aside class="success">
This operation does not require authentication
</aside>

## Calcule le périmetre d'un Rectangle

> Code samples

```shell
# You can also use wget
curl -X GET http://localhost:8080/rectangle/perimeter?width=5&height=5 \
  -H 'Accept: application/json'

```

`GET /rectangle/perimeter`

<h3 id="calcule-le-périmetre-d'un-rectangle-parameters">Parameters</h3>

|Name|In|Type|Required|Description|
|---|---|---|---|---|
|width|query|number|true|Longueur de la largeur|
|height|query|number|true|Longueur de la hauteur|

> Example responses

> 200 Response

```json
{
  "perimeter": 20
}
```

<h3 id="calcule-le-périmetre-d'un-rectangle-responses">Responses</h3>

|Status|Meaning|Description|Schema|
|---|---|---|---|
|200|[OK](https://tools.ietf.org/html/rfc7231#section-6.3.1)|OK|[Perimeter](#schemaperimeter)|

<aside class="success">
This operation does not require authentication
</aside>

<h1 id="calculette-triangle">Triangle</h1>

## Calcule l'aire d'un Triangle

> Code samples

```shell
# You can also use wget
curl -X GET http://localhost:8080/triangle/area?A=3&B=4&C=5 \
  -H 'Accept: application/json'

```

`GET /triangle/area`

<h3 id="calcule-l'aire-d'un-triangle-parameters">Parameters</h3>

|Name|In|Type|Required|Description|
|---|---|---|---|---|
|A|query|number|true|Longueur du premier côté|
|B|query|number|true|Longueur du second côté|
|C|query|number|true|Longueur du troisième côté|

> Example responses

> 200 Response

```json
{
  "area": 6
}
```

<h3 id="calcule-l'aire-d'un-triangle-responses">Responses</h3>

|Status|Meaning|Description|Schema|
|---|---|---|---|
|200|[OK](https://tools.ietf.org/html/rfc7231#section-6.3.1)|OK|[Area](#schemaarea)|

<aside class="success">
This operation does not require authentication
</aside>

## Calcule le périmetre d'un Triangle

> Code samples

```shell
# You can also use wget
curl -X GET http://localhost:8080/triangle/perimeter?A=3&B=4&C=5 \
  -H 'Accept: application/json'

```

`GET /triangle/perimeter`

<h3 id="calcule-le-périmetre-d'un-triangle-parameters">Parameters</h3>

|Name|In|Type|Required|Description|
|---|---|---|---|---|
|A|query|number|true|Longueur du premier côté|
|B|query|number|true|Longueur du second côté|
|C|query|number|true|Longueur du troisième côté|

> Example responses

> 200 Response

```json
{
  "perimeter": 12
}
```

<h3 id="calcule-le-périmetre-d'un-triangle-responses">Responses</h3>

|Status|Meaning|Description|Schema|
|---|---|---|---|
|200|[OK](https://tools.ietf.org/html/rfc7231#section-6.3.1)|OK|[Perimeter](#schemaperimeter)|

<aside class="success">
This operation does not require authentication
</aside>

<h1 id="calculette-disque">Disque</h1>

## Calcule l'aire d'un Disque

> Code samples

```shell
# You can also use wget
curl -X GET http://localhost:8080/disque/area?r=5 \
  -H 'Accept: application/json'

```

`GET /disque/area`

<h3 id="calcule-l'aire-d'un-disque-parameters">Parameters</h3>

|Name|In|Type|Required|Description|
|---|---|---|---|---|
|r|query|number|true|Rayon du disque|

> Example responses

> 200 Response

```json
{
  "area": 78.53981633974483
}
```

<h3 id="calcule-l'aire-d'un-disque-responses">Responses</h3>

|Status|Meaning|Description|Schema|
|---|---|---|---|
|200|[OK](https://tools.ietf.org/html/rfc7231#section-6.3.1)|OK|[Area](#schemaarea)|

<aside class="success">
This operation does not require authentication
</aside>

## Calcule le périmetre d'un Disque

> Code samples

```shell
# You can also use wget
curl -X GET http://localhost:8080/disque/perimeter?r=5 \
  -H 'Accept: application/json'

```

`GET /disque/perimeter`

<h3 id="calcule-le-périmetre-d'un-disque-parameters">Parameters</h3>

|Name|In|Type|Required|Description|
|---|---|---|---|---|
|r|query|number|true|Rayon du disque|

> Example responses

> 200 Response

```json
{
  "perimeter": 31.41592653589793
}
```

<h3 id="calcule-le-périmetre-d'un-disque-responses">Responses</h3>

|Status|Meaning|Description|Schema|
|---|---|---|---|
|200|[OK](https://tools.ietf.org/html/rfc7231#section-6.3.1)|OK|[Perimeter](#schemaperimeter)|

<aside class="success">
This operation does not require authentication
</aside>

<h1 id="calculette-couronne">Couronne</h1>

## Calcule l'aire d'une Couronne

> Code samples

```shell
# You can also use wget
curl -X GET http://localhost:8080/couronne/area?re=10&ri=5 \
  -H 'Accept: application/json'

```

`GET /couronne/area`

<h3 id="calcule-l'aire-d'une-couronne-parameters">Parameters</h3>

|Name|In|Type|Required|Description|
|---|---|---|---|---|
|re|query|number|true|Rayon de la Couronne extérieur|
|ri|query|number|true|Rayon de la Couronne intérieur|

> Example responses

> 200 Response

```json
{
  "area": 235.61944901923448
}
```

<h3 id="calcule-l'aire-d'une-couronne-responses">Responses</h3>

|Status|Meaning|Description|Schema|
|---|---|---|---|
|200|[OK](https://tools.ietf.org/html/rfc7231#section-6.3.1)|OK|[Area](#schemaarea)|

<aside class="success">
This operation does not require authentication
</aside>

## Calcule le périmetre d'une Couronne

> Code samples

```shell
# You can also use wget
curl -X GET http://localhost:8080/couronne/perimeter?re=10&ri=5 \
  -H 'Accept: application/json'

```

`GET /couronne/perimeter`

<h3 id="calcule-le-périmetre-d'une-couronne-parameters">Parameters</h3>

|Name|In|Type|Required|Description|
|---|---|---|---|---|
|re|query|number|true|Rayon du Couronne extérieur|
|ri|query|number|true|Rayon du Couronne intérieur|

> Example responses

> 200 Response

```json
{
  "perimeter": 94.24777960769379
}
```

<h3 id="calcule-le-périmetre-d'une-couronne-responses">Responses</h3>

|Status|Meaning|Description|Schema|
|---|---|---|---|
|200|[OK](https://tools.ietf.org/html/rfc7231#section-6.3.1)|OK|[Area](#schemaarea)|

<aside class="success">
This operation does not require authentication
</aside>

# Schemas

<h2 id="tocS_Area">Area</h2>
<!-- backwards compatibility -->
<a id="schemaarea"></a>
<a id="schema_Area"></a>
<a id="tocSarea"></a>
<a id="tocsarea"></a>

```json
{
  "area": 0
}

```

### Properties

|Name|Type|Required|Restrictions|Description|
|---|---|---|---|---|
|area|integer|false|none|none|

<h2 id="tocS_Perimeter">Perimeter</h2>
<!-- backwards compatibility -->
<a id="schemaperimeter"></a>
<a id="schema_Perimeter"></a>
<a id="tocSperimeter"></a>
<a id="tocsperimeter"></a>

```json
{
  "perimeter": 0
}

```

### Properties

|Name|Type|Required|Restrictions|Description|
|---|---|---|---|---|
|perimeter|integer|false|none|none|

