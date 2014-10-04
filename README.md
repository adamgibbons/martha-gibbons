martha-gibbons
==============
Professional website for Martha Gibbons.
Powered by Jekyll.

## Quick setup

1. `git clone https://github.com/adamgibbons/martha-gibbons.git`

1. `cd martha-gibbons`

1. `bundle install`

1. `jekyll serve`

## Issues encountered during quick setup

Is your current shell running Ruby 1.9.3?

`ruby -v`

If you're not on Ruby 1.9.3, is it available on your machine?

```bash
$ rvm list
rvm rubies

  ruby-1.9.3-p547 [ x86_64 ]
  =* ruby-2.0.0-p481 [ x86_64 ]
```

Great, there it is. Let's use it.

```bash
$ rvm use ruby-1.9.3-p547
Using /Users/gibber/.rvm/gems/ruby-1.9.3-p547
```

Install those gems:

`bundle install`

Run Jekyll locally and watch for file changes:

`jekyll serve --watch`
