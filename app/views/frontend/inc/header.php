<!DOCTYPE html>
<html>

<head>
    <title>Layout HTML</title>
    <style>
    body {
        max-width: 1000px;
        margin: 0 auto;
    }

    .flex-container {
        display: flex;
        max-width: 1000px;
        overflow-x: scroll;
    }

    .flex-container1 {
        display: grid;
        max-width: 1000px;
        gap: 50px;

        grid-template-columns: repeat(2, 1fr);

    }

    .flex-container::-webkit-scrollbar {
        display: none;
    }

    /* Hide scrollbar for IE, Edge and Firefox */
    .flex-container {
        -ms-overflow-style: none;
        /* IE and Edge */
        scrollbar-width: none;
        /* Firefox */
    }

    .flex-container>div {
        background-color: #f1f1f1;
        min-width: 200px;
        margin: 10px;
        text-align: center;
    }

    .flex-container>div>img {
        height: 400px;
        width: 100%;
    }

    .flex-container1>div {
        background-color: #f1f1f1;
        min-width: 50%;
        text-align: center;

    }

    .flex-container1>div:nth-child(2) {
        background-color: white;
        min-width: 50%;
        text-align: center;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 50px;
        grid-template-rows: repeat(2, 1fr);

    }

    .flex-container1>div:nth-child(2)>div {
        background-color: #f1f1f1;
        height: 400px;

    }
    </style>
    <style>
    .flex-container2 {
        color: #f1f1f1;
        font-family: sans-serif;
        text-align: center;
        display: grid;
        max-width: 1000px;
        gap: 50px;

        grid-template-columns: repeat(2, 1fr);
        margin-bottom: 50px;
    }

    .flex-container2>div {
        background-color: white;
        min-width: 50%;
        text-align: center;

    }

    .container2_div1 {
        display: grid;
        grid-template-rows: 2fr 4fr;
        text-align: center;
        gap: 50px;
        background-color: white;


    }

    .container2_div1>div:nth-child(1) {
        background-color: #f1f1f1;

    }

    .container2_div1>div:nth-child(2) {
        gap: 50px;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
    }

    .container2_div1>div:nth-child(2)>div {
        height: 400px;
        background-color: #f1f1f1;
    }

    .container2_div2 {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        text-align: center;
        gap: 50px;
        background-color: white;

    }

    .container2_div2>div>div {
        background-color: #f1f1f1;
    }

    .container2_div2>div:nth-child(1) {
        display: grid;
        gap: 50px;
        grid-template-rows: 3fr 2fr;
    }

    .container2_div2>div:nth-child(2) {
        display: grid;
        grid-template-rows: 2fr 3fr;
        gap: 50px;
    }
    </style>
</head>