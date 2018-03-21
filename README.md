# Simple Swoole HTTP Server

这是基于 Swoole HTTP Server，通过简单的 URI 匹配，实现的一个非常简单的 HTTP 高并发业务服务器。

## Requirements

* PHP 5.6+ with swoole ext.

## Usage

1. Fork this repository on Github.
2. Clone your forked repository with `git clone https://github.com/{YOURNAME}/simple-swoole-http-server`
3. `cd simple-swoole-http-server`
4. Copy `conf/config.php.example` to `conf/config.php`
5. Start the `SimpleHTTPServer` with `./simple-http-server`

启动之后，你就可以通过 `http://localhost:9501/stats` 来访问了。