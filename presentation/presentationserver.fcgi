#! /usr/bin/env python3

from flup.server.fcgi import WSGIServer


if __name__ == '__main__':
    WSGIServer(app).run()