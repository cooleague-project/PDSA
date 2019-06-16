from __future__ import division, print_function

# coding=utf-8
import sys
import os
import glob
import re
import numpy as np

# Keras
from keras.applications.imagenet_utils import preprocess_input, decode_predictions
from keras.models import load_model
from keras.preprocessing import image
import unittest




# frist testfunction
# wrong image path  right model path
# wrong model path right image path
# wrong image path wrong model path
# right model path right image path
# empty model path empty image path
def model_predict(img_path, model):
    img = image.load_img(img_path, target_size=(64, 64)) #target_size must agree with what the trained model expects!!

    # Preprocessing the image
    img = image.img_to_array(img)
    img = np.expand_dims(img, axis=0)

   
    preds = model.predict(img)
    return preds




MODEL_PATH = 'models/trained_model.h5'

RWONG_MODEL_PATH = 'models/trained_moddddddel.h5'
try:
    model = load_model(MODEL_PATH)
except:
     model=1

try:
    wrong_model = load_model(RWONG_MODEL_PATH)
except:
     wrong_model=1
#pnoena
Pimg_path="models/p.jpg"
#normal
Nimg_path="models/n.png"

wrong_path=r"dsaf"

class MyModuleTest(unittest.TestCase):

    def test_rightP_x(self):
        assert(model_predict(Pimg_path,model) == 1)
    def test_rightN_x(self):
        assert(model_predict(Nimg_path,model) == 0)
    def test_empty_imag_x(self):
        with self.assertRaises(Exception): model_predict("",model)
    def test_empty_model_x(self):
        with self.assertRaises(Exception): model_predict(Pimg_path,"")
    def test_all_empty_x(self):
        with self.assertRaises(Exception): model_predict("","")
    def test_Pright_wrong_model_x(self):
        with self.assertRaises(Exception): model_predict(Pimg_path,wrong_model)
    def test_wrong_image_wrong_model_x(self):
        with self.assertRaises(Exception): model_predict(wrong_path,wrong_model)
    def test_wrong_image_right_model_x(self):
        with self.assertRaises(Exception): model_predict(wrong_path,model)

if __name__ == '__main__':
    unittest.main()
