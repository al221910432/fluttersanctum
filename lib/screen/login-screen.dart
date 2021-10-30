import 'package:flutter/material.dart';
import 'package:fluttersanctum/providers/auth.dart';
import 'package:provider/provider.dart';

class LoginScreen extends StatefulWidget {
  @override
  State<StatefulWidget> createState() {
    return LoginState();
  }
}

class LoginState extends State<LoginScreen> {
  final _formKey = GlobalKey<FormState>();
  String _email;
  String _password;

  void submit() {
    Provider.of<Auth>(context, listen: false).login(credentials: {
      'email': _email,
      'password': _password,
    });

    Navigator.pop(context);
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('Login'),
      ),
      body: Form(
        key: _formKey,
        child: Scrollbar(
          child: SingleChildScrollView(
            padding: EdgeInsets.all(16),
            child: Column(
              children: [
                TextFormField(
                  initialValue: 'hectorgarcia.com',
                  decoration: InputDecoration(
                    labelText: 'Email',
                    hintText: 'You@somewhere.com',
                  ),
                  onSaved: (value) {
                    _email = value;
                  },
                ),
                TextFormField(
                  initialValue: 'password',
                  decoration: InputDecoration(labelText: 'Password'),
                  onSaved: (value) {
                    _password = value;
                  },
                ),
                SizedBox(
                  width: double.infinity,
                  child: FlatButton(
                    child: Text('Login'),
                    onPressed: () {
                      _formKey.currentState.save();

                      this.submit();
                    },
                  ),
                )
              ],
            ),
          ),
        ),
      ),
    );
  }
}
