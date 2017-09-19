import bs4
from urllib.request import urlopen as uReq
from bs4 import BeautifulSoup as soup

my_url = 'https://www.newegg.com/Bluetooth-Adapters/SubCategory/ID-295'

uClient = uReq(my_url)
page_html = uClient.read()
uClient.close()

page_soup = soup(page_html, "html.parser")

containers = page_soup.findAll("div",{"class":"item-container"})

filename = "badapters.csv"
f = open(filename, "w")

headers = "Product_Name, Price, Shipping\n"
f.write(headers)

for container in containers:
	
		
	title_container = container.findAll("a",{"class":"item-title"})
	product_name = title_container[0].text

	price_container = container.findAll("li",{"class":"price-current"})
	price_amount1 = price_container[0].strong.text
	price_amount2 = price_container[0].sup.text

	shipping_container = container.findAll("li",{"class":"price-ship"})
	shipping = shipping_container[0].text.strip()

	
	
	f.write(product_name.replace(",","|") + "," +"$"+price_amount1.replace(",","")+""+price_amount2 + "," + shipping + "\n")

f.close()