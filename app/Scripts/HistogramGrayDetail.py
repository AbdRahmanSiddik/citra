import cv2
import matplotlib.pyplot as plt
import numpy as np
import os
import sys

def show_grayscale_histogram(image_path):
    # Baca citra grayscale
    image_gray = cv2.imread(image_path, cv2.IMREAD_GRAYSCALE)
    if image_gray is None:
        print(f"Error: Could not open or find the image '{image_path}'")
        return

    # Menghitung histogram
    histogram, bin_edges = np.histogram(image_gray, bins=256, range=(0, 255))

    # Menghitung nilai statistik
    mean = np.mean(image_gray)
    variance = np.var(image_gray)
    std_dev = np.std(image_gray)

    # Menampilkan histogram
    plt.figure()
    plt.title("Histogram Citra Grayscale")
    plt.xlabel("Intensitas Pixel")
    plt.ylabel("Jumlah Piksel")
    plt.plot(bin_edges[0:-1], histogram, color='black')  # plot histogram
    plt.xlim([0.0, 255.0])  # batas x

    # Menampilkan nilai statistik pada plot
    stats_text = f'Mean: {mean:.2f}\nVariance: {variance:.2f}\nStd Dev: {std_dev:.2f}'
    plt.text(0.65, 0.85, stats_text, transform=plt.gca().transAxes, fontsize=10, color='black')

    # Tampilkan plot
    plt.tight_layout()

    plt.show()

if __name__ == "__main__":
    if len(sys.argv) != 2:
        print("Usage: python HistogramGrayDetail.py <image_path>")
    else:
        image_path = sys.argv[1]
        show_grayscale_histogram(image_path)
