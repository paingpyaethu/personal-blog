import 'dart:async';

void main() {
  print("Start Main");

  StreamController controller = StreamController();
  controller.sink.add(1);
  controller.sink.add(2);
  controller.sink.add(3);

  Stream realStream = controller.stream.asBroadcastStream();
  realStream.listen((e) {
    print(e);
  });
  print("End Stream");
  controller.sink.add(4);

  realStream.listen((e) {
    print(e);
  });
  print("End Main");
}
