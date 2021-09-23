# Endpoints


## create a user




> Example request:

```bash
curl -X POST \
    "http://localhost/api/authenticate" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer EAAD5wpxZBE2oBAFTZBZCFZAQWvemZCud9iBwPeuhPmGDV2y29iWMRylWF1ehZAT1F0Ghus97nweDfIbcgntrln3mXZBpRZCXISgghq2e2YZCD0dHQnZArJL7cu4bsTqBpor154gWAHzTPdwLqCrPNdLZCVBkcdsD4T8cr1wmuZAiH4bBPxvqwT8C8ZA7GYkpfnZCvfGjTRbBwh9fMHoOiZBL9N9vEjWnyUn9EdKx1ZAMFg6xjmw3SgZDZD"
```

```javascript
const url = new URL(
    "http://localhost/api/authenticate"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer EAAD5wpxZBE2oBAFTZBZCFZAQWvemZCud9iBwPeuhPmGDV2y29iWMRylWF1ehZAT1F0Ghus97nweDfIbcgntrln3mXZBpRZCXISgghq2e2YZCD0dHQnZArJL7cu4bsTqBpor154gWAHzTPdwLqCrPNdLZCVBkcdsD4T8cr1wmuZAiH4bBPxvqwT8C8ZA7GYkpfnZCvfGjTRbBwh9fMHoOiZBL9N9vEjWnyUn9EdKx1ZAMFg6xjmw3SgZDZD",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "user": {
        "id": 33,
        "name": "admin user",
        "email": "user@gmail.com",
        "email_verified_at": null,
        "api_token": "AAD5wpxZBE2oBAFTZBZCFZAQWvemZCud9iBwPeuhPmGDV2y29iWMRylWF1ehZAT1F0Ghus97nweDfIbcgntrln3mXZBpRZCXISgghq2e2YZCD0dHQnZArJL7cu4bsTqBpor154gWAHzTPdwLqCrPNdLZCVBkcdsD4T8cr1wmuZAiH4bBPxvqwT8C8ZA7GYkpfnZCvfGjTRbBwh9fMHoOiZBL9N9vEjWnyUn9EdKx1ZAMFg6xjmw3SgZDZD",
        "created_at": "2021-09-23 21:57:28",
        "updated_at": "2021-09-23 22:04:40"
    }
}
```
<div id="execution-results-POSTapi-authenticate" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-authenticate"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-authenticate"></code></pre>
</div>
<div id="execution-error-POSTapi-authenticate" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-authenticate"></code></pre>
</div>
<form id="form-POSTapi-authenticate" data-method="POST" data-path="api/authenticate" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Authorization":"Bearer EAAD5wpxZBE2oBAFTZBZCFZAQWvemZCud9iBwPeuhPmGDV2y29iWMRylWF1ehZAT1F0Ghus97nweDfIbcgntrln3mXZBpRZCXISgghq2e2YZCD0dHQnZArJL7cu4bsTqBpor154gWAHzTPdwLqCrPNdLZCVBkcdsD4T8cr1wmuZAiH4bBPxvqwT8C8ZA7GYkpfnZCvfGjTRbBwh9fMHoOiZBL9N9vEjWnyUn9EdKx1ZAMFg6xjmw3SgZDZD"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-authenticate', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-authenticate" onclick="tryItOut('POSTapi-authenticate');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-authenticate" onclick="cancelTryOut('POSTapi-authenticate');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-authenticate" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/authenticate</code></b>
</p>
</form>


## add new photos to gallery




> Example request:

```bash
curl -X POST \
    "http://localhost/api/gallery/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer EAAD5wpxZBE2oBAFTZBZCFZAQWvemZCud9iBwPeuhPmGDV2y29iWMRylWF1ehZAT1F0Ghus97nweDfIbcgntrln3mXZBpRZCXISgghq2e2YZCD0dHQnZArJL7cu4bsTqBpor154gWAHzTPdwLqCrPNdLZCVBkcdsD4T8cr1wmuZAiH4bBPxvqwT8C8ZA7GYkpfnZCvfGjTRbBwh9fMHoOiZBL9N9vEjWnyUn9EdKx1ZAMFg6xjmw3SgZDZD" \
    -d '{"photos":["doloribus"]}'

```

```javascript
const url = new URL(
    "http://localhost/api/gallery/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer EAAD5wpxZBE2oBAFTZBZCFZAQWvemZCud9iBwPeuhPmGDV2y29iWMRylWF1ehZAT1F0Ghus97nweDfIbcgntrln3mXZBpRZCXISgghq2e2YZCD0dHQnZArJL7cu4bsTqBpor154gWAHzTPdwLqCrPNdLZCVBkcdsD4T8cr1wmuZAiH4bBPxvqwT8C8ZA7GYkpfnZCvfGjTRbBwh9fMHoOiZBL9N9vEjWnyUn9EdKx1ZAMFg6xjmw3SgZDZD",
};

let body = {
    "photos": [
        "doloribus"
    ]
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json
{
    "status": true
}
```
<div id="execution-results-POSTapi-gallery-create" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-gallery-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-gallery-create"></code></pre>
</div>
<div id="execution-error-POSTapi-gallery-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-gallery-create"></code></pre>
</div>
<form id="form-POSTapi-gallery-create" data-method="POST" data-path="api/gallery/create" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Authorization":"Bearer EAAD5wpxZBE2oBAFTZBZCFZAQWvemZCud9iBwPeuhPmGDV2y29iWMRylWF1ehZAT1F0Ghus97nweDfIbcgntrln3mXZBpRZCXISgghq2e2YZCD0dHQnZArJL7cu4bsTqBpor154gWAHzTPdwLqCrPNdLZCVBkcdsD4T8cr1wmuZAiH4bBPxvqwT8C8ZA7GYkpfnZCvfGjTRbBwh9fMHoOiZBL9N9vEjWnyUn9EdKx1ZAMFg6xjmw3SgZDZD"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-gallery-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-gallery-create" onclick="tryItOut('POSTapi-gallery-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-gallery-create" onclick="cancelTryOut('POSTapi-gallery-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-gallery-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/gallery/create</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>photos</code></b>&nbsp;&nbsp;<small>string[]</small>  &nbsp;
<input type="text" name="photos.0" data-endpoint="POSTapi-gallery-create" data-component="body" required  hidden>
<input type="text" name="photos.1" data-endpoint="POSTapi-gallery-create" data-component="body" hidden>
<br>

</p>

</form>


## get all gallery items without any filtering




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/gallery/all" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer EAAD5wpxZBE2oBAFTZBZCFZAQWvemZCud9iBwPeuhPmGDV2y29iWMRylWF1ehZAT1F0Ghus97nweDfIbcgntrln3mXZBpRZCXISgghq2e2YZCD0dHQnZArJL7cu4bsTqBpor154gWAHzTPdwLqCrPNdLZCVBkcdsD4T8cr1wmuZAiH4bBPxvqwT8C8ZA7GYkpfnZCvfGjTRbBwh9fMHoOiZBL9N9vEjWnyUn9EdKx1ZAMFg6xjmw3SgZDZD"
```

```javascript
const url = new URL(
    "http://localhost/api/gallery/all"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer EAAD5wpxZBE2oBAFTZBZCFZAQWvemZCud9iBwPeuhPmGDV2y29iWMRylWF1ehZAT1F0Ghus97nweDfIbcgntrln3mXZBpRZCXISgghq2e2YZCD0dHQnZArJL7cu4bsTqBpor154gWAHzTPdwLqCrPNdLZCVBkcdsD4T8cr1wmuZAiH4bBPxvqwT8C8ZA7GYkpfnZCvfGjTRbBwh9fMHoOiZBL9N9vEjWnyUn9EdKx1ZAMFg6xjmw3SgZDZD",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "photos": [
        {
            "id": 320,
            "image": "https:\/\/scontent.fcmb5-1.fna.fbcdn.net\/v\/t1.18169-9\/10888788_913559328656120_3978478648170247735_n.jpg?_nc_cat=106&ccb=1-5&_nc_sid=05277f&_nc_ohc=emjcPEXeuR8AX8iszHX&_nc_ht=scontent.fcmb5-1.fna&edm=AP4hL3IEAAAA&oh=8e4f34e486fc32ea51be791a45a76a01&oe=61737609",
            "album": "Cover Photos"
        },
        {
            "id": 321,
            "image": "https:\/\/scontent.fcmb5-1.fna.fbcdn.net\/v\/t1.18169-9\/10352989_873856192626434_1255523221916369249_n.jpg?_nc_cat=105&ccb=1-5&_nc_sid=05277f&_nc_ohc=Kqww_jSSLlgAX8ZD8t3&_nc_ht=scontent.fcmb5-1.fna&edm=AP4hL3IEAAAA&oh=b2511b35b53a7e97772bad8d3cd3c649&oe=6173E8C8",
            "album": "Cover Photos"
        },
        {
            "id": 322,
            "image": "https:\/\/scontent.fcmb5-1.fna.fbcdn.net\/v\/t1.18169-9\/63706_691306440881411_1701433828_n.jpg?_nc_cat=109&ccb=1-5&_nc_sid=05277f&_nc_ohc=vaRfxU8BYvoAX96iLsS&_nc_ht=scontent.fcmb5-1.fna&edm=AP4hL3IEAAAA&oh=8e265d9847d92e560f27a2d5ce772bec&oe=61722202",
            "album": "Cover Photos"
        },
        {
            "id": 323,
            "image": "https:\/\/scontent.fcmb5-1.fna.fbcdn.net\/v\/t1.6435-9\/81562314_3058086840870014_5141157762633302016_n.jpg?_nc_cat=102&ccb=1-5&_nc_sid=8024bb&_nc_ohc=h5ilvUB2SfkAX9NT609&_nc_ht=scontent.fcmb5-1.fna&edm=AP4hL3IEAAAA&oh=153793c3d5821e3d8e8b7e0298e7ca68&oe=61713681",
            "album": "Timeline Photos"
        },
        {
            "id": 324,
            "image": "https:\/\/scontent.fcmb5-1.fna.fbcdn.net\/v\/t1.6435-9\/81360777_3058086770870021_1362496057312804864_n.jpg?_nc_cat=110&ccb=1-5&_nc_sid=8024bb&_nc_ohc=hWT31gNlcmIAX_katwW&_nc_ht=scontent.fcmb5-1.fna&edm=AP4hL3IEAAAA&oh=dde41808b832fef571046c0bb96361ba&oe=6172D91C",
            "album": "Timeline Photos"
        },
        {
            "id": 325,
            "image": "https:\/\/scontent.fcmb5-1.fna.fbcdn.net\/v\/t1.18169-9\/381362_301102819901777_1569940744_n.jpg?_nc_cat=109&ccb=1-5&_nc_sid=e007fa&_nc_ohc=JzJHmAAwBfAAX_DjVHN&_nc_ht=scontent.fcmb5-1.fna&edm=AP4hL3IEAAAA&oh=788631eae675164e114dd7eac2ea9dfd&oe=61710ED6",
            "album": "fun"
        },
        {
            "id": 326,
            "image": "https:\/\/scontent.fcmb5-1.fna.fbcdn.net\/v\/t1.18169-9\/10676230_913563945322325_630016824910165679_n.jpg?_nc_cat=101&ccb=1-5&_nc_sid=7aed08&_nc_ohc=fF4q8Rt73g4AX8CpppB&_nc_ht=scontent.fcmb5-1.fna&edm=AP4hL3IEAAAA&oh=1f8eafd7466a684f0e883e6a7b9ce2fc&oe=61737174",
            "album": "Profile Pictures"
        },
        {
            "id": 327,
            "image": "https:\/\/scontent.fcmb5-1.fna.fbcdn.net\/v\/t1.18169-9\/373900_301105716568154_1119618857_n.jpg?_nc_cat=110&ccb=1-5&_nc_sid=e007fa&_nc_ohc=x4RDsxsv8FAAX-xo3PB&_nc_oc=AQlcl_oU8wdJBgh2D6SkHZi58VxcPfGm1gNWTvPZTq6V3uxDKU0i2EaeqDMNfO9qLpI&_nc_ht=scontent.fcmb5-1.fna&edm=AP4hL3IEAAAA&oh=0353baa1c9fd324cc11159efaa07d368&oe=617275B3",
            "album": "fun"
        }
    ]
}
```
<div id="execution-results-GETapi-gallery-all" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-gallery-all"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-gallery-all"></code></pre>
</div>
<div id="execution-error-GETapi-gallery-all" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-gallery-all"></code></pre>
</div>
<form id="form-GETapi-gallery-all" data-method="GET" data-path="api/gallery/all" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Authorization":"Bearer EAAD5wpxZBE2oBAFTZBZCFZAQWvemZCud9iBwPeuhPmGDV2y29iWMRylWF1ehZAT1F0Ghus97nweDfIbcgntrln3mXZBpRZCXISgghq2e2YZCD0dHQnZArJL7cu4bsTqBpor154gWAHzTPdwLqCrPNdLZCVBkcdsD4T8cr1wmuZAiH4bBPxvqwT8C8ZA7GYkpfnZCvfGjTRbBwh9fMHoOiZBL9N9vEjWnyUn9EdKx1ZAMFg6xjmw3SgZDZD"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-gallery-all', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-gallery-all" onclick="tryItOut('GETapi-gallery-all');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-gallery-all" onclick="cancelTryOut('GETapi-gallery-all');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-gallery-all" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/gallery/all</code></b>
</p>
</form>



