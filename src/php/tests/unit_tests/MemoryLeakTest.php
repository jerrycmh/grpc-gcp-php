<?php

//==============Channel Test====================

function callbackFunc($context)
{
  return [];
}
function callbackFunc2($context)
{
  return ["k1" => "v1"];
}
function waitUntilNotIdle($channel) {
  for ($i = 0; $i < 10; $i++) {
    $now = Grpc\Timeval::now();
    $deadline = $now->add(new Grpc\Timeval(1000));
    if ($channel->watchConnectivityState(GRPC\CHANNEL_IDLE,
      $deadline)) {
      return true;
    }
  }
}

// Set up
$channel = new Grpc\Channel('localhost:0', ['credentials' => Grpc\ChannelCredentials::createInsecure()]);

// Test InsecureCredentials
assert('Grpc\Channel' == get_class($channel));

// Test ConnectivityState
$state = $channel->getConnectivityState();
assert(0 == $state);

// Test GetConnectivityStateWithInt
$state = $channel->getConnectivityState(123);
assert(0 == $state);

// Test GetConnectivityStateWithString
$state = $channel->getConnectivityState('hello');
assert(0 == $state);

// Test GetConnectivityStateWithBool
$state = $channel->getConnectivityState(true);
assert(0 == $state);

$channel->close();