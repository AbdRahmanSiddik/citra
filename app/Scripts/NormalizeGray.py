import cv2
import numpy as np
import matplotlib.pyplot as plt
import os
import sys

def normalize_histogram_grayscale(image_path):
    # Baca citra grayscale
    image_gray = cv2.imread(image_path, cv2.IMREAD_GRAYSCALE)
    if image_gray is None:
        print(f"Error: Could not open or find the image '{image_path}'")
        return

    # Menghitung histogram
    hist, bins = np.histogram(image_gray.flatten(), 256, [0, 256])

    # Menghitung fungsi distribusi kumulatif (CDF)
    cdf = hist.cumsum()
    cdf_normalized = cdf * hist.max() / cdf.max()

    # Normalisasi menggunakan CDF
    image_normalized = np.interp(image_gray.flatten(), bins[:-1], cdf_normalized).reshape(image_gray.shape)
    image_normalized = image_normalized.astype(np.uint8)

    # Tampilkan hasil citra sebelum dan sesudah normalisasi
    # plt.figure(figsize=(12, 6))
    # plt.subplot(1, 2, 1)
    # plt.imshow(image_gray, cmap='gray')
    # plt.title('Original Grayscale Image')
    # plt.axis('off')

    # plt.subplot(1, 2, 2)
    # plt.imshow(image_normalized, cmap='gray')
    # plt.title('Normalized Grayscale Image')
    # plt.axis('off')

    plt.tight_layout()
    # plt.show()

    # Tentukan jalur output
    output_dir = 'images/input'
    os.makedirs(output_dir, exist_ok=True)
    output_path = os.path.join(output_dir, 'normalized_grayscale_image.png')

    # Simpan citra yang telah dinormalisasi
    cv2.imwrite(output_path, image_normalized)

# Jalankan fungsi dengan path citra Anda
if __name__ == "__main__":
    if len(sys.argv) != 2:
        print("Usage: python histogram.py <image_path>")
    else:
        image_path = sys.argv[1]
        normalize_histogram_grayscale(image_path)
