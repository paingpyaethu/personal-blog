import 'dart:async';

void main() {
  print("Start Main");
  doSomething();
  doMicrotask();
  print("End Main");
}

doSomething() {
  Future(() => {print('Do something')});
}

doMicrotask() {
  scheduleMicrotask(() {
    print('Microtask..');
  });
}
