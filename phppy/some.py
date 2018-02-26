#!/usr/bin/env python
#-*- coding:utf-8 -*-
import pandas as pd
import numpy as np
import matplotlib.pyplot as plt

from sklearn.linear_model import LinearRegression
from mpl_toolkits.mplot3d import axes3d

data = np.loadtxt('D:\PhpEnvironment\www\yy\phppy\linear_regression_data1.txt', delimiter=',')

x = np.c_[np.ones(data.shape[0]),data[:,0]]
y = np.c_[data[:,1]]

regr = LinearRegression()
regr.fit(x[:,1].reshape(-1,1), y.ravel())

print({"coef":regr.coef_[0],"intercept":regr.intercept_})