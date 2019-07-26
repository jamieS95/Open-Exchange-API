# Open_Exchange_API
open exchange api v1
-----------------------------
I have came across alot of exchanges and its time consuming to 'workaround' some
of their API's to work the same as each other. I am suggesting we have a team of reputable developers
working on 'open exchange api' on github where we all contribute ideas and make this a standard for all exchanges
to implement. we would need to contact exchanges and get them on board with the idea (which would be hard to do)
once we get the first version finalised.
I have included a rough mock-up which tries to suit different exchanges.
Exchanges could implement this alongside their own api folder "/api/".

 

GET /oea/information/
--------------------

*no login required 

we could use this to alert us to update our scripts to the latest oea version.
for version compatability for new and old versions of the api. 


    {"supportedversions":["1"],"error":false,"errormsg":""}

GET /oea/v1/coinlist/
--------------------

*no login required

This will provide us with the nessessary information for each coin.

    {
        {
            "symbol":"BTC",
            "withdrawal_fee":0.0001,
            "min_withdrawal":0.001,
            "withdrawal_suspended":false,
            "deposit_fee":0.00000,
            "min_deposit":0.001,
            "deposit_suspended":false,
        },
        {
            "symbol":"BTC",
            "withdrawal_fee":0.0001,
            "min_withdrawal":0.001,
            "withdrawal_suspended":false,
            "deposit_fee":0.00000,
            "min_deposit":0.001,
            "deposit_suspended":false,
        },
    ...
    }

GET /oea/v1/tradingpairs/
------------------

*no login required

main symbol,sub symbol,min trade amount
etc....

GET /oea/v1/account/
------------------

*api login required

some exchanges charge fee's based on a per user basis, we will try to cover all our bases to make this script compatiable with all exchanges.

    {"makerfee":15,"takerfee":15,"trade_suspended":false,"withdrawal_suspended":false,"deposit_suspended":false,"withdrawal_limit":"0.000000","withdrawal_current":"0.000000","balances":[{"symbol":"BTC","available":"4723846.89208129","inorder":"0.00000000"},{"symbol":"LTC","available":"4723846.89208129","inorder":"0.00000000"}],"error":false,"errormsg":""}
    
POST /oea/v1/neworder/
------------------

*api login required

etc... 

POST /oea/v1/dummyorder/
------------------

*api login required

etc... 


