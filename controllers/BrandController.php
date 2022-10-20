    <?php
    require_once './models/BrandModel.php';
    require_once './views/brandsView.php';
    require_once './helpers/AuthHelper.php';

    class BrandController{

        private $model;
        private $view;
        private $authHelper;

        function __construct(){
            $this->model = new BrandModel();
            $this->authHelper = new AuthHelper();
            $this->view =new brandsView($this->authHelper->getUser());

            
        }

        function showBrands(){
            $brands = $this->model->getAllBrands();
            $this->view->showBrands($brands, $error = false);

        }
        function viewBrandProducts($id){
            
            
                $brandProducts = $this-> model->getProducts($id);
                $brand = $this-> model ->getBrand($id);
                if(!empty($brandProducts)){
                    $this->view->showBrandProducts($brandProducts , $brand);
                }else{
                    $brands = $this->model->getAllBrands();
                    $this->view->showBrands($brands, "No hay productos de la marca seleccionada.");
                }
            
        }

        function addBrand() {
            $this->authHelper->checkLoggedIn();
            $name = $_POST['name'];
            $country = $_POST['country'];
            $foundation = $_POST['foundation'];
            $website = $_POST['website'];
            $id = $this->model->insertBrand($name, $country, $foundation, $website);
            header("Location: " . BASE_URL . 'brands'); 
        }

        function deleteBrand($id){
            $this->authHelper->checkLoggedIn();

            try{
                $this->model->deleteBrandById($id);
                header("Location: " . BASE_URL . 'brands');
            }catch(Exception $e){
                $brands = $this->model->getAllBrands();
                $this->view->showBrands($brands, "No se puede eliminar la marca ya que esta tiene productos asociados, elimine primero el producto.");
            }
        }
        
        function updateBrand($id){
            $this->authHelper->checkLoggedIn();
            $brand = $this->model->getBrand($id);
            $this->view->showFormEdit($brand);
        }

        function editBrand ($id){
        $this->authHelper->checkLoggedIn();
        if((isset($_POST['name'])) && (isset($_POST['country'])) && (isset($_POST['foundation'])) && (isset($_POST['website']))){
            $name = $_POST['name'];
            $country = $_POST['country'];
            $foundation = $_POST['foundation'];
            $website = $_POST['website'];
            $brand_ID =$id;
            $id = $this->model->editProduct($name, $country, $foundation, $website, $brand_ID);
            header("Location: ".BASE_URL. 'brands');
        }
    }
}