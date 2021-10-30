import 'dart:developer';

import 'package:dio/dio.dart';

import 'providers/auth.dart';

Dio dio() {
  var dio = Dio(BaseOptions(
      baseUrl: 'http://192.168.0.6:8000/api',
      responseType: ResponseType.plain,
      headers: {
        'accept': 'appication/json',
        'content-type': 'appication/json'
      }));

  dio
    ..interceptors.add(InterceptorsWrapper(
        onRequest: (options) => requestInterceptor(options)));

  return dio;
}

dynamic requestInterceptor(RequestOptions options) async {
  if (options.headers.containsKey('auth')) {
    var token = await Auth().getToken();

    options.headers.addAll({'Authorization': 'Bearer $token'});
  }
}
