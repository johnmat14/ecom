
    el = document.getElementById('xanana');

var avalia = angular.module('avalia', []);

avalia.controller('Index' , function(){
    var vm = this;

    vm.total = [{
      id : 1,
      nome : 'Hommer Simpson',
      preco : 'R$ 4,90',
      img : "http://montink.camisadimona.com.br/image/cache/data/camisas/camiseta-homer-simpson-donut-5a5682dbb3457-estampa-301-680x969.png"
    },
    {
      id : 2,
      nome : 'Nutela',
      preco : 'R$ 6,90',
      img : "https://bakerbynature.com/wp-content/uploads/2015/10/IMG_0488-5-2.jpg"
    },
    {
      id : 3,
      nome : 'Chocolate Branco',
      preco : 'R$ 3,90',
      img : "https://scontent-lht6-1.cdninstagram.com/vp/3f1751a4b77461a86f99a2f50c77f8fd/5BEC96D0/t51.2885-15/e35/34015223_1294992770636569_2644832434150965248_n.jpg"
    },
    {
      id : 4,
      nome : 'Chocolate',
      preco : 'R$ 3,90',
      img : "https://homemadehooplah.com/wp-content/uploads/2015/05/chocolate-cake-donuts-with-nutella-frosting-1-1.jpg"
    },

  ];

  vm.dados = [{
    id : 1,
    nome : 'Raiz',
    preco : 'R$ 4,90',
    img : "https://rosicerverizo.files.wordpress.com/2011/09/donut_express_review.jpg",
    precoN : '2,90',
  },
  {
    id : 2,
    nome : 'Leite com toddy',
    preco : 'R$ 6,90',
    img : "https://media-cdn.tripadvisor.com/media/photo-s/05/a3/3e/61/cafe-donuts.jpg",
    precoN : '2,90',
  },


];

});


