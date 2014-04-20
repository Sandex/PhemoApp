<?php

namespace Phemo\DemoBundle\Controller;

use Phalcon\Filter;
use Phalcon\Http\ResponseInterface;
use Phalcon\Mvc\Controller;
use Phalcon\Validation\Exception;
use Phemo\DemoBundle\Entity\Category;
use Phemo\DemoBundle\Entity\Product;
use Phemo\WidgetsBundle\Widget\DataProvider\ModelDataProvider;

/**
 * Controller for Product CRUD
 */
class ProductController extends Controller
{

    /**
     * List entities
     */
    public function indexAction()
    {
        $product = new Product;

        $product->bind($this->request->getPost('ProductSearch', null, []));

        $criteria = null;
        if ($this->request->isAjax()) {
            $criteria = $product->getCriteria($this->request->getPost('ProductSearch'));
        }

        $dataProvider = new ModelDataProvider();
        $dataProvider->setDI($this->getDI());
        $dataProvider->setParams([
            'model'    => $product,
            'criteria' => $criteria,
            'pageSize' => 10,
        ]);


        $this->view->dataProvider = $dataProvider;
        $this->view->categories = Category::find();


        if ($this->request->isAjax()) {
            $this->view->partial('product/_search_grid');
            $this->view->disable();
        }
    }

    /**
     * View entity
     *
     * @param int $id
     * @return ResponseInterface
     */
    public function viewAction($id)
    {
        try {
            $this->view->product = $this->loadProduct($id);
        } catch (Exception $e) {
            $this->flashSession->error($e->getMessage());

            return $this->response->redirect('product/index');
        }
    }

    /**
     * Show or save edit form entity
     *
     * @param int $id
     * @return ResponseInterface
     */
    public function editAction($id)
    {
        try {
            $product = $this->loadProduct($id);

            $this->view->categories = Category::find();

            if ($this->request->isPost()) {
                // pass data from into model
                $product->bind($this->request->getPost('Product'));

                if ($product->save()) {
                    $this->flashSession->success('Product #' . $id . ' successful updated!');
                }
                else {
                    foreach ($product->getMessages() as $message) {
                        $this->flashSession->error($message);
                    }
                }

                return $this->response->redirect('product/edit/' . $id);
            }
        } catch (Exception $e) {
            $this->flashSession->error($e->getMessage());

            return $this->response->redirect('product/index');
        }

        $this->view->product = $product;
    }

    /**
     * Create new entity
     *
     * @return ResponseInterface
     */
    public function createAction()
    {
        try {
            $product = new Product;

            if ($this->request->isPost()) {
                // pass data from into model
                $product->bind($this->request->getPost('Product'));

                if ($product->save()) {
                    $this->flashSession->success('Product successful created!');

                    return $this->response->redirect('product/edit/' . $product->getProductId());
                }
                else {
                    foreach ($product->getMessages() as $message) {
                        $this->flashSession->error($message);
                    }
                }
            }

            $this->view->categories = Category::find();
        } catch (Exception $e) {
            $this->flashSession->error($e->getMessage());

            return $this->response->redirect('product/index');
        }

        $this->view->product = $product;
    }

    /**
     * Delete entity
     *
     * @param int $id
     * @return ResponseInterface
     */
    public function deleteAction($id)
    {
        try {
            $product = $this->loadProduct($id);

            if ($product->delete()) {
                $this->flashSession->success('Product #' . $id . ' deleted!');
            }
            else {
                foreach ($product->getMessages() as $message) {
                    $this->flashSession->error($message);
                }
            }
        } catch (Exception $e) {
            $this->flashSession->error($e->getMessage());
        }

        return $this->response->redirect('product/index');
    }

    /**
     * Load entity
     *
     * @param int $id
     * @return Product
     */
    private function loadProduct($id)
    {
        // sanitize input var
        $filter = new Filter();
        $id = $filter->sanitize($id, 'int');

        // fetch model
        $product = new Product;
        $product = $product->findFirst($id);

        if (!$product) {
            throw new Exception('Product #' . $id . ' does not exist!');
        }

        return $product;
    }

}