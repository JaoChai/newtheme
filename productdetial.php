<?php include('header.php');?>
<?php include('topheader.php');?>





























<script type="text/javascript">
  $(function(){
    productsCarousel($('.carousel_2.products-carousel'),1,4,1);
  })
  </script>

  <script>
  $options=$('.product-options');
  $select=$('select',$options);
  $ul=$('ul',$options);
  function updateSelectOptionsDisabling(){
    $('option',$select.not(':first')).attr("disabled","disabled");
    for(a in product_options[$select.first().val()]){
      $('option[value='+a+']',$select).removeAttr("disabled","disabled");
      for(b in product_options[$select.first().val()][a]){
        $('option[value='+b+']',$select).removeAttr("disabled","disabled");
      }
    }
  }
  function updateListOptionsDisabling(){
    for(a in product_options[$('li.active a',$ul.first()).data('value')]){
      $('a[data-value='+a+']',$ul).parent().removeClass("absent-option");
      for(b in product_options[$('li.active a',$ul.first()).data('value')][a]){
        $('a[data-value='+b+']',$ul).parent().removeClass("absent-option");
      }
    }
  }

  $(function($) {


    if(inIframe())
    {
      setTimeout(function(){
        if ($(".product-previews-carousel").length) {
          var $this = $(".product-previews-carousel");
          $this.imagesLoaded(function() {
            $this.slick({
              slidesToShow: 3,
              slidesToScroll: 1,
              dots: false,
              focusOnSelect: true,
              infinite: false
            });
          })
          $this.on('click', '.slick-slide', function() {
            $('.zoom-link').removeClass('disable-gallery');
          })
        }
      },1400)
    }else{
      if ($(".product-previews-carousel").length) {
        var $this = $(".product-previews-carousel");
        $this.imagesLoaded(function() {
          $this.slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            dots: false,
            focusOnSelect: true,
            infinite: false
          });
        })
        $this.on('click', '.slick-slide', function() {
          $('.zoom-link').removeClass('disable-gallery');
        })
      }
    }

    updateSelectOptionsDisabling();
    $select.first().addClass('first');
    $ul.first().addClass('first');
    $select.change(function(){
      updateSelectOptionsDisabling();
      if($(this).hasClass('first'))
      {
        for (var first_option_to_select in product_options[$select.first().val()])break;
        $('option',$select.not(':first')).removeAttr("selected");
        $('option[value='+first_option_to_select+']',$select.not(':first')).attr("selected","selected");
      }
      updateData('select');
      Currency.convertAll('USD', Currency.cookie.read());
    })


    function setFixedAbsent(){
      $('li',$ul).addClass("absent-option");
      $('li',$ul.first()).removeClass('absent-option');
      first_active=$('li.active a',$ul.first()).data('value');
      $('a',$ul).each(function(){
        val=$(this).data('value');
        if($(this).closest('ul').data('index')!=0)
        for (b in product_options[first_active])
        for (c in product_options[first_active][b])
        {
          switch($(this).closest('ul').data('index')) {
            case 1:
            if(product_options[first_active]!=undefined && product_options[first_active][val]!=undefined)
            $('a[data-value='+val+']',$ul).parent().removeClass('absent-option');
            break;
            case 2:
            if(product_options[first_active]!=undefined && product_options[first_active][b]!=undefined && product_options[first_active][b][val]!=undefined)
            $('a[data-value='+val+']',$ul).parent().removeClass('absent-option');
          }
        }
      })
    }


    $('a',$ul).click(function(e){
      $('li',$(this).parent()).removeClass('active');
      $('li.active.absent-option',$ul).each(function(){
        $(this).removeClass('active').siblings().not('.absent-option').first().addClass('active');
      });
      $(this).parent().addClass('active');
      updateData('ul > li.active > a');
      Currency.convertAll('USD', Currency.cookie.read());
      e.preventDefault();
    })


    $('a',$ul)
    .mouseenter(function() {
      val=$(this).data('value');
      $('li',$ul).addClass("absent-option");
      $(this).parent().removeClass('absent-option').siblings().removeClass('absent-option');
      for (a in product_options)
      for (b in product_options[a])
      for (c in product_options[a][b])
      {
        switch($(this).closest('ul').data('index')) {
          case 0:
          if(product_options[val]!=undefined && product_options[val][b]!=undefined && product_options[val][b][c]!=undefined)
          $('a[data-value='+b+'],a[data-value='+c+']',$ul).parent().removeClass('absent-option');
          break;
          case 1:
          if(product_options[a]!=undefined && product_options[a][val]!=undefined && product_options[a][val][c]!=undefined)
          $('a[data-value='+a+'],a[data-value='+c+']',$ul).parent().removeClass('absent-option');
          break;
          default:
          if(product_options[a]!=undefined && product_options[a][b]!=undefined && product_options[a][b][val]!=undefined)
          $('a[data-value='+a+'],a[data-value='+b+']',$ul).parent().removeClass('absent-option');
        }
      }
    })
    .mouseleave(function() {
      $('li',$ul).removeClass("absent-option");
      setFixedAbsent();
    });

    setFixedAbsent();

    $('.add_to_cart_product_page').on('click',function(e){
      $(this).addClass('btn-loading').addClass('disabled').blur().html('<i class="icon icon-spinner spin"></i><span>Adding...</span>');
      if($('.toggleStack'.length))$('.toggleStack').click();
      parent.CartJS.addItem($('input[name=id]').val(), $('[name=quantity]').val(),{}, {
        "success": function(data, textStatus, jqXHR) {
          if($('.add_to_cart_product_page').length){
            setTimeout(function(){
              $('.add_to_cart_product_page').removeClass('btn-loading').removeClass('disabled');
              $('.add_to_cart_product_page').html("<i class='icon icon-cart'></i><span>Added</span>");
            },1000)
            setTimeout(function(){
              $('.add_to_cart_product_page').html("<i class='icon icon-cart'></i><span>Add to Cart</span>");
            },2000)
            setTimeout(function(){
              $('.toggleStack').click();
            },3000)
          }
        },
        "error": function(jqXHR, textStatus, errorThrown) {
          $('#modalError .modal-body p').text(errorThrown);
          $('#modalError').modal('show');
        }
      });
      e.preventDefault();
    })


  });

  $(window.parent).on('cart.requestComplete', function(event, cart) {
    parent.cartPopupUpdate();
    parent.productStackUpdate();
  });

  </script>

</main>


<?php include('footer.php');?>
