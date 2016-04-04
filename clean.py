#!/bin/env python

from shutil import rmtree
from subprocess import call
from os import remove
import argparse


def main():
    parser = argparse.ArgumentParser(description='''
                                Clean and re-initialize your project folder''')
    parser.add_argument('-git', action='store_true',
                                default=None,
                                help='Re-initialize a git repository')
    parser.add_argument('-db',  nargs=4,
                                metavar=('dbname','root_password','user','user_password'),
                                default=['phpdev','helloworld','iouser','iodevpassword'],
                                help='Change the default database creadentials')
    args = parser.parse_args()

    # replace the default database creadentials
    if args.db:
        c = '''
        #MYSQL environment setup
        MYSQL_ALLOW_EMPTY_PASSWORD=no
        MYSQL_DATABASE={name}
        MYSQL_ROOT_PASSWORD={rpass}
        MYSQL_USER={u}
        MYSQL_PASSWORD={upass}
        '''.format( name=args.db[0],
                    rpass=args.db[1],
                    u=args.db[2],
                    upass=args.db[3])
        print '\n Here is the overriden database config:\n%s\n' % c
        with open('./db/env', 'w') as f:
            f.writelines(c)

    # remove un-needed stuff
    rmtree('./.git/', ignore_errors=True)
    remove('./README.md')
    remove(parser.prog)

    # re-initialize a new git repository
    if args.git:
        call('git init && git add . && git status', shell=True)
        print '\nDo not forget to `git remote add origin git@github:You/Repo` ;)\n'

    print 'HAPPY CODING (^_^)\n'

if __name__ == '__main__':
    main()
