<?php

use Konekt\PdfInvoice\InvoicePrinter;

include '../src/InvoicePrinter.php';
$invoice = new InvoicePrinter();
  /* Header Settings */
  $invoice->setLogo('images/Mali.png');
  $invoice->setColor('#ef9500');
  $invoice->setType('Fatura');
  $invoice->setReference('FT 110S2022/1');
  $invoice->setDate(date('d-m-Y', time()));
  $invoice->setTime(date('h:i:s A', time()));
  $invoice->setDue(date('d-m-Y', strtotime('+3 months')));
  $invoice->setFrom(['LuaiTech', 'Luanda , Angola', '000000000 KIlamba', 'Telefone: 923445566', 'Email: gomcalsam@gmail.com', 'Web: luaitech.com']);
  $invoice->setTo(['Golden Hill. Limitada', 'NIF: 5417142069']);
  /* Adding Items in table */
  $invoice->addItem('AMD Athlon X2DC-7450', '2.4GHz/1GB/160GB/SMP-DVD/VB', 6, 0, 580, 0, 3480);
  $invoice->addItem('PDC-E5300', '2.6GHz/1GB/320GB/SMP-DVD/FDD/VB', 4, 0, 645, 0, 2580);
  $invoice->addItem('LG 18.5" WLCD', '', 10, 0, 230, 0, 2300);
  $invoice->addItem('HP LaserJet 5200', '', 1, 0, 1100, 0, 1100);
  /* Set totals alignment */
  $invoice->setTotalsAlignment('horizontal');
  /* Add totals */
  $invoice->addTotal('Total', 9460);
  $invoice->addTotal('IVA 14%', 1986.6);
  $invoice->addTotal('Custos de remessa', 5400);
  $invoice->addTotal('Total do documento', 16846.6, true);
  /* Set badge */
  //$invoice->addBadge('Payment Paid');
  /* Add title */
  //$invoice->addTitle('Important Notice');
  /* Add Paragraph */
  //$invoice->addParagraph("No item will be replaced or refunded if you don't have the invoice with you. You can refund within 2 days of purchase.");
  /* Set footer note */
  $invoice->setFooternote('TER7 - Processado por programa validado n 0000/AGT/2021 MalipoPOS, desenvolvido por LuaiTech');
  /* Render */
  $invoice->render('example1.pdf', 'I'); /* I => Display on browser, D => Force Download, F => local path save, S => return document path */
