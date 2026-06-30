<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <title>Certificado de Participação - IJOMAC</title>

    <style>
        @page {
            size: A4 landscape;
            margin: 0;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Georgia", serif;
            background: #ececec;
        }

        .certificate {
            width: 297mm;
            height: 210mm;
            margin: auto;
            background: #fff;
            position: relative;
            overflow: hidden;
            border: 18px solid #222;
        }

        /* Barras Decorativas */
        .top-bar {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 15px;
            background: #f58220;
        }

        .bottom-bar {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 15px;
            background: #f58220;
        }

        .corner {
            position: absolute;
            width: 170px;
            height: 170px;
            border: 15px solid #f58220;
        }

        .corner.top-left {
            top: 20px;
            left: 20px;
            border-right: none;
            border-bottom: none;
        }

        .corner.top-right {
            top: 20px;
            right: 20px;
            border-left: none;
            border-bottom: none;
        }

        .corner.bottom-left {
            bottom: 20px;
            left: 20px;
            border-right: none;
            border-top: none;
        }

        .corner.bottom-right {
            bottom: 20px;
            right: 20px;
            border-left: none;
            border-top: none;
        }

        .content {
            padding: 35px 70px;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .logo {
            text-align: center;
        }

        .logo img {
            height: 100px;
        }

        .company {
            text-align: center;
            font-size: 16px;
            color: #444;
            letter-spacing: 3px;
        }

        .title {
            text-align: center;
            margin-top: 20px;
            font-size: 42px;
            color: #f58220;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 4px;
        }

        .subtitle {
            text-align: center;
            margin-top: 8px;
            color: #666;
            font-size: 18px;
        }

        .text {
            margin-top: 30px;
            text-align: center;
            font-size: 20px;
            line-height: 1.8;
            color: #333;
        }

        .student-name {
            font-size: 34px;
            font-weight: bold;
            color: #111;
            margin: 20px 0;
            text-decoration: underline;
        }

        .info {
            width: 100%;
            margin-top: 35px;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px 50px;
            font-size: 18px;
        }

        .item {
            border-bottom: 1px dotted #777;
            padding-bottom: 6px;
        }

        .item strong {
            color: #f58220;
        }

        .footer {
            margin-top: auto;
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
        }

        .signature {
            width: 300px;
            text-align: center;
        }

        .signature .line {
            border-top: 2px solid #000;
            margin-bottom: 8px;
        }

        .signature span {
            font-size: 17px;
            font-weight: bold;
        }

        .date {
            font-size: 18px;
            color: #444;
        }

        .serial {
            position: absolute;
            bottom: 28px;
            right: 40px;
            color: #999;
            font-size: 14px;
            letter-spacing: 2px;
        }

        .watermark {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            opacity: .05;
            z-index: 0;
        }

        .watermark img {
            width: 420px;
        }

        .content {
            position: relative;
            z-index: 2;
        }
    </style>

</head>

<body>

    <div class="certificate">

        <div class="top-bar"></div>
        <div class="bottom-bar"></div>

        <div class="corner top-left"></div>
        <div class="corner top-right"></div>
        <div class="corner bottom-left"></div>
        <div class="corner bottom-right"></div>

        <div class="watermark">
            <img src="{{ public_path('site/logo/logo.png') }}">
        </div>

        <div class="content">

            <div class="logo">
                <img src="{{ public_path('site/logo/logo.png') }}">
            </div>

            <div class="company">
                IJOMAC, LDA
            </div>

            <div class="title">
                Certificado de Participação
            </div>

            <div class="subtitle">
                Certificamos que
            </div>

            <div class="text">

                <div class="student-name">
                    {{ $student->name }}
                </div>

                participou com aproveitamento do curso ministrado pela
                <b>IJOMAC</b>, cumprindo integralmente a carga horária e os
                requisitos estabelecidos para a formação.

            </div>

            <div class="info">

                <div class="item">
                    <strong>Telefone:</strong>
                    {{ $student->phone }}
                </div>

                <div class="item">
                    <strong>Email:</strong>
                    {{ $student->email }}
                </div>

                <div class="item">
                    <strong>Código do Estudante:</strong>
                    {{ $student->code }}
                </div>

                <div class="item">
                    <strong>Curso:</strong>
                    {{ $student->course->name }}
                </div>

                <div class="item">
                    <strong>Duração:</strong>
                    {{ $student->course->duration }}
                </div>

                <div class="item">
                    <strong>Nível:</strong>
                    {{ $levels[$student->course->level] }}
                </div>

                <div class="item">
                    <strong>Orientador / Formador:</strong>
                    {{ $student->course->teacher->name }}
                </div>

                <div class="item">
                    <strong>Data de Emissão:</strong>
                    {{ now()->format('d/m/Y') }}
                </div>

            </div>

            <div class="footer">

                <div class="date">
                    Luanda - Angola
                </div>

                <div class="signature">
                    <div class="line"></div>
                    <span>Direção da IJOMAC</span>
                </div>

                <div class="signature">
                    <div class="line"></div>
                    <span>Formação Profissional Certificada</span>
                </div>

            </div>

        </div>

        <div class="serial">
            Nº CERTIFICADO: {{ $serie }}
        </div>

    </div>

</body>

</html>
