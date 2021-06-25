<?php 
         $artigo = 'short';

         $get_cat=  DB::table('products')
         ->where('category', '=', $artigo)
         ->select('id_product')
         ->get();
         
         ?>
  <div>
    <a href="#" data-open-in="picker" data-picker-close-text="OK" data-back-on-select="true" class="item-link smart-select" >
     <select  class="products_qto select-filter-size"  name="product" id="product-qto" >
        <option selected>TAM</option>
         -- @foreach ($get_cat as $key => $tam_prod)
         <?php
            $tam = DB::table('sizes')
              ->where('id_product', '=', $tam_prod->id_product)
              ->select('title')
              ->get();  
          ?>
        <option value="{{$tam->title}}">{{$tam->title}}</option>
   @endforeach   
    </select>                                                                                                         
   </a>
  </div>
    <a href="#" onclick="cancelSearchProducts()">LIMPAR</a>
</div>