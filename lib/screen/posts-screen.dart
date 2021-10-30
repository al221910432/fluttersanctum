import 'dart:convert';
import 'dart:developer';

import 'package:dio/dio.dart' as Dio;
import 'package:flutter/material.dart';
import 'package:fluttersanctum/dio.dart';
import 'package:fluttersanctum/models/post.dart';

class PostsScreen extends StatefulWidget {
  @override
  State<StatefulWidget> createState() {
    return PostsState();
  }
}

class PostsState extends State<PostsScreen> {
  Future<List<Post>> getPosts() async {
    Dio.Response response = await dio()
        .get('user/posts', options: Dio.Options(headers: {'auth': true}));

    List posts = json.decode(response.toString());
    return posts.map((posts) => Post.fromJson(posts)).toList();
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('Posts'),
      ),
      body: Center(
        child: FutureBuilder<List<Post>>(
            future: getPosts(),
            builder: (context, snapshot) {
              if (snapshot.hasData) {
                return ListView.builder(
                    itemCount: snapshot.data.length,
                    itemBuilder: (context, index) {
                      var item = snapshot.data[index];

                      return ListTile(
                        title: Text(item.title),
                      );
                    });
              } else if (snapshot.hasError) {
                log(snapshot.error.toString());
                return Text('Failed to load posts');
              }
              return CircularProgressIndicator();
            }),
      ),
    );
  }
}
