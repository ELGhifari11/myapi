<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# 📿 Prayer Time API

Welcome to the Prayer Time API! This API allows you to retrieve prayer times based on the user's location. You can get the prayer times for today or for the entire month.

## 📚 Table of Contents

- [🚀 Getting Started](#getting-started)
- [🌐 API Endpoints](#api-endpoints)
- [📅 Get Today's Prayer Times](#get-todays-prayer-times)
- [🗓️ Get Monthly Prayer Times](#get-monthly-prayer-times)
<!-- - [🔍 Example Responses](#example-responses) -->

## 🚀 Getting Started

To use the Prayer Time API, you need to send a GET request to the appropriate endpoint with the user's IP address.

## 🌐 API Endpoints

### 📅 Get Today's Prayer Times

Retrieve the prayer times for today based on the user's location.

- **URL:** `/prayertime/{cityName}/today`
- **Method:** GET
- **URL Params:**
 - `cityName` - The city name of the user.

**Example Request:**

```http
GET /api/prayertime/bekasi/today
```

### 🗓️ Get Monthly Prayer Times

**Example Request:**

```http
GET /api/prayertime/yogykarta/monthly
```


