<style>
    body {
        background-color: #DAD7D7;
    }

    .Department {
        height: auto;
        width: 100%;
        background-color: white;
    }

    .Department-1 {
        margin: 5% 5% 0% 5%;
    }

    .Department-1>h2 {
        margin: 5% 0% 0% 0%;
        font-size: 1rem;
    }

    .Department-2 {
        margin: 2% 5% 5% 5%;
    }

    .Detail_doctor>div {
        padding: 2%;
    }

    .Detail_doctor {
        width: 90%;
        height: auto;
        margin: 2% 5%;
        background-color: #F4EEEE;
    }

    #block-content-avata {
        justify-content: center;
        align-self: center;
        margin: 2%;
    }

    #avata {
        width: 5em;
        height: 5em;
        border-radius: 100%;
    }

    #name {
        color: #0038FF;
        font-family: Inter;
        font-size: 20px;
        font-style: normal;
        font-weight: 600;
        line-height: 10px;
        /* 50% */
    }

    .info {
        margin-left: 4%;
    }

    .hr{
        border: 1px solid black;
    }

    .button {
        display: inline-block;
        border-radius: 4px;
        background-color: #159EEC;
        border: none;
        color: #FFFFFF;
        text-align: center;
        font-size: 20px;
        padding: 10px;
        width: 150px;
        transition: all 0.5s;
        cursor: pointer;
        margin: 5px;
        vertical-align:middle !important;
    }

    .button span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
    }

    .button span:after {
        content: '\00bb';
        position: absolute;
        opacity: 0;
        top: 0;
        right: -20px;
        transition: 0.5s;
    }

    .button:hover span {
        padding-right: 25px;
    }

    .button:hover span:after {
        opacity: 1;
        right: 0;
    }
</style>