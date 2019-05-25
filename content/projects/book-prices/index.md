---
title: "Book Prices"
date: 2003-02-01
timeline_badge_color: "success"
fontawesome_icon: "fa-search-dollar"
technologies: ["Java", "SOAP", "Apache Axis", "CORBA", "RMI"]
resources:
- name: featured
  src: "images/screen-shopper.gif"
---

This project was originally done as part of the Distributed Object Technologies course, implemented in both
CORBA and RMI. I later rewrote it, and it is currently implemented as a web service running under Apache Axis.
The concept is simple - there are plenty of price comparison sites, but in order to use them, you have to go
visit them. In other words, you either have to do your shopping from their site, or shop at another site
and then go to their site to find the product (shop twice). We wanted to create something whereby you can
shop at your favorite site, then click a button and see prices at other stores. This application detects what
product you're looking at, then goes out to other retailers and finds their prices in real time 
(no database required).

