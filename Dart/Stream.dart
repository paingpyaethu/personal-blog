void main() async {
  print("Starting");
  // var aa = await doSomething();
  // print(aa);
  Stream<int> aa = await doAnything();
  aa.listen((event) => print(event));
  print("Ending");
}

Future<int> doSomething() async {
  return Future(() {
    for (int i = 1; i < 10; i++) {
      return (i);
    }
    return 0;
  });
}

Stream<int> doAnything() async* {
  for (int i = 1; i < 10; i++) {
    yield i;
  }
}
