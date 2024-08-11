
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EL API Documentation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 8px;
        }
        .center {
            text-align: center;
        }
        .title {
            font-size: 2em;
            color: #e53e3e;
        }
        .subtitle {
            font-size: 1.2em;
            margin-top: 10px;
            margin-bottom: 20px;
            color: #4a5568;
        }
        .section {
            margin-bottom: 20px;
        }
        h2 {
            color: #2d3748;
            border-bottom: 2px solid #e53e3e;
            padding-bottom: 5px;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin: 5px 0;
        }
        ol {
        list-style-type: decimal;
        padding-left: 20px;
        }
        ol li {
            font-size: 1.1em; /* Ukuran font item daftar */
            font-weight: bold; /* Menjadikan teks tebal */
            margin-bottom: 10px;
        }
        ol li::marker {
            font-size: 1.1em; /* Ukuran nomor */
            font-weight: bold; /* Menjadikan nomor tebal */
        }
        a {
            color: #3182ce;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        pre {
            background-color: #444;
            color: #f8f8f2;
            padding: 20px;
            border-radius: 5px;
            overflow-x: auto;
        }
        code {
            font-family: "Courier New", Courier, monospace;
            background-color: #444;
            padding: 2px 5px;
            border-radius: 3px;
            color: #f8f8f2;
        }
        .badge {
            display: inline-block;
            padding: 3px 8px;
            margin: 2px;
            font-size: 0.9em;
            color: #fff;
            background-color: #e53e3e;
            border-radius: 3px;
        }
        .copy-btn {
            cursor: pointer;
            background-color: #e53e3e;
            color: #fff;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 0.9em;
            margin-left: 10px;
        }
        .copy-btn:hover {
            background-color: #2b6cb0;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="center">
            <a href="https://laravel.com" target="_blank">
                <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="200" alt="Laravel Logo">
            </a>
        </div>

        <div class="center">
            <a href="https://github.com/ELGhifari11/myapi" target="_blank">
                <img src="https://img.shields.io/github/repo-size/ELGhifari11/myapi" alt="Repository Size" style="margin: 5px;">
            </a>
            <a href="https://github.com/ELGhifari11/myapi" target="_blank">
                <img src="https://img.shields.io/github/stars/ELGhifari11/myapi" alt="Stars" style="margin: 5px;">
            </a>

            <a href="https://pondokit.com/" target="_blank">
                <img src="https://img.shields.io/badge/Web-pondokit.com-blue" alt="Website" style="margin: 5px;">
            </a>
            <a href="https://instagram.com/ELGhifari11" target="_blank">
                <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram" style="width: 20px; height: 20px; margin: 5px;">
            </a>
        </div>


        <div class="center">
            <h1 class="title">🔴 EL API Documentation 🔴</h1>
            <p class="subtitle">Welcome to EL API Documentation! This Documentation allows you to retrieve All these API. You can search for the API you need here.</p>
        </div>

        <div class="section">
            <h2>🌐 🔗 Table of API</h2>
            <ol>
                {{-- <li><a href="#getting-started">🚀 Getting Started</a></li> --}}
                {{-- <li><a href="#api-endpoints">🌐 API Endpoints</a></li> --}}
                <li><a href="#get-todays-prayer-times">📅 Get Today's Prayer Times</a></li>
                <li><a href="#get-monthly-prayer-times">🗓️ Get Monthly Prayer Times</a></li>
            </ol>
        </div>
        <br>

        <div class="section" id="getting-started">
            <h2>🚀 Getting Started</h2>
            <p>To use the Prayer Time API, you need to send a GET request to the appropriate endpoint with the user's IP address.</p>
            <p><strong>Base URL:</strong> <code>https://api.elghifari.site/api</code>
            <button class="copy-btn" onclick="copyToClipboard('https://api.elghifari.site/api')">Copy</button>

            </p>
        </div>
        <br>



        <div class="section" id="get-todays-prayer-times">
            <h2>🔗 Get Today's Prayer Times</h2>
            <p>Retrieve the prayer times for today based on the user's location.</p>
            <ul>
                <li><strong>URL:</strong> <code>/prayertime/{cityName}/today</code></li>
                <li><strong>Method:</strong> GET</li>
                <li><strong>URL Params:</strong>
                    <ul>
                        <li><code>cityName</code> - The city name of the user.</li>
                    </ul>
                </li>
            </ul>
            <p><strong>Example Request:</strong>
                <a href="https://api.elghifari.site/api/prayertime/bekasi/today" target="_blank">https://api.elghifari.site/api/prayertime/bekasi/today</a>
                <button class="copy-btn" onclick="copyToClipboard('https://api.elghifari.site/api/prayertime/bekasi/today')">Copy</button>
            </p>
            <pre><code>{
"status": true,
"request": {
"path": "/sholat/jadwal/1221/2024-08-06",
"year": "2024",
"month": "08",
"date": "06"
},
"data": {
"id": 1221,
"lokasi": "KOTA BEKASI",
"daerah": "JAWA BARAT",
"jadwal": {
"tanggal": "Selasa, 06/08/2024",
"imsak": "04:34",
"subuh": "04:44",
"terbit": "05:59",
"dhuha": "06:27",
"dzuhur": "12:01",
"ashar": "15:22",
"maghrib": "17:57",
"isya": "19:08",
"date": "2024-08-06"
}
}
}</code></pre>
        </div>
        <br>

        <div class="section" id="get-monthly-prayer-times">
            <h2>🔗 Get Monthly Prayer Times</h2>
            <p>Retrieve the prayer times for the entire month based on the user's location.</p>
            <ul>
                <li><strong>URL:</strong> <code>/prayertime/{cityName}/monthly</code></li>
                <li><strong>Method:</strong> GET</li>
                <li><strong>URL Params:</strong>
                    <ul>
                        <li><code>cityName</code> - The city name of the user.</li>
                    </ul>
            </ul>
            <p><strong>Example Request:</strong>
                <a href="https://api.elghifari.site/api/prayertime/yogyakarta/monthly" target="_blank">https://api.elghifari.site/api/prayertime/yogyakarta/monthly</a>
                <button class="copy-btn" onclick="copyTo

Clipboard('https://api.elghifari.site/api/prayertime/yogyakarta/monthly')">Copy</button>
            </p>
            <pre><code>{
"status": true,
"request": {
"path": "/sholat/jadwal/1505/2024/08",
},
"data": {
"id": 1505,
"lokasi": "KOTA YOGYAKARTA",
"daerah": "D.I. YOGYAKARTA",
"jadwal": [
{
"tanggal": "Kamis, 01/08/2024",
"imsak": "04:23",
"subuh": "04:33",
"terbit": "05:48",
"dhuha": "06:17",
"dzuhur": "11:48",
"ashar": "15:09",
"maghrib": "17:42",
"isya": "18:53",
"date": "2024-08-01"
},
{
"tanggal": "Jumat, 02/08/2024",
"imsak": "04:23",
"subuh": "04:33",
"terbit": "05:48",
"dhuha": "06:16",
"dzuhur": "11:48",
"ashar": "15:09",
"maghrib": "17:42",
"isya": "18:53",
"date": "2024-08-02"
},
// ...other days of the month
]
}
}</code></pre>
        </div>
    </div>

    <script>
        function copyToClipboard(url) {
            const el = document.createElement('textarea');
            el.value = url;
            document.body.appendChild(el);
            el.select();
            document.execCommand('copy');
            document.body.removeChild(el);
            alert('URL copied to clipboard!');
        }
    </script>

</body>
</html>


