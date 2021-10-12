<div class="border-end bg-white" id="sidebar-wrapper">
    <div class="sidebar-heading border-bottom bg-light">Emek Apartmanı Yönetimi</div>
    <div class="list-group list-group-flush">
        <a class="list-group-item list-group-item-action list-group-item-light p-3<?php if(@$sayfa=="insert") echo ' active'; ?>" href="index.php?page=insert" >Auto Insert</a>
        <a class="list-group-item list-group-item-action list-group-item-light p-3<?php if(@$sayfa=="kategori_ekle") echo ' active'; ?>" href="index.php?sayfa=kategori_ekle">Kategori Ekle</a>
        <a class="list-group-item list-group-item-action list-group-item-light p-3<?php if(@$sayfa=="gelir_liste") echo ' active'; ?>" href="index.php?sayfa=gelir_liste">Gelir Listesi</a>
    </div>
</div>