void main() async {
  String res = await doSomething();
  print(res);

  print('End of File');
}

Future<String> doSomething() async {
  return Future(() {
    return "Hello";
  });
}
